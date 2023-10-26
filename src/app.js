
const mysql = require("mysql");
const express = require("express");
const path = require("path");
const app = express();
app.use(express.json());
app.use(express.urlencoded({ extended: false }));


const port = 3000;


// create connection to database
// enter your connection information
const connection = mysql.createConnection({
    host: 'localhost',
    database: 'brokers_database', // name of database
    user: 'root',
    password: 'vanisha' // enter your password
});

// see if database connection was successful
connection.connect((err) => {
    if (err) {
        console.error('Error connecting to the database: ' + err.stack);
        return;
    }
    console.log('Connected to the database' + connection.threadId);
});

// check if app connection was successful
app.listen(3000, function (){
    console.log("App listening on port 3000");
});

//app.use(express.static('public'));
app.use(express.static(path.join(__dirname, '..', 'public')));


// Serve static files from the 'public' directory
//app.use(express.static(path.join(__dirname, 'public')));

// Display ManageBrokers.html at http://localhost:3000/managebrokers
// app.get('/managebrokers', (req, res) => {
//     res.sendFile(path.join(__dirname, '../public/Administrator/Managebrokers.html'));
// });


app.get('/managebrokers', (req, res) => {
    const filePath = path.join(__dirname, '..', 'public','Administrator', 'ManageBrokers.html');
    res.sendFile(filePath);
});



// get request to search for brokers in the database
app.get('/searchBrokers', (req, res) => {
    const search = req.query.search;
    // sql query to search for broker information
    const sql = `
        SELECT idbroker_info, name, last_name, email, phone
        FROM broker_info
        WHERE name LIKE ? OR last_name LIKE ?
    `;
    const searchTerm = `%${search}%`;

    connection.query(sql, [searchTerm, searchTerm], (err, results) => {
        if (err) {
            console.error('Cannot find brokers: ' + err.stack);
            res.status(500).json({ error: 'Internal Server Error' });
            return;
        }
        // send the results as JSON
        res.json(results);
    });
});


// code for the backend CRUD operarions....................
// CRUD Operations

// POST add new broker
app.post('/createBroker', (req, res) => {
    const { name, last_name, email, phone } = req.body;

    createBroker(name, last_name, email, phone)
        .then(() => {
            res.status(200).send('Broker created successfully.');
        })
        .catch((error) => {
            console.error(error);
            res.status(500).send('Error creating broker.');
        });
});

// Function to create a broker in the database
const createBroker = (name, last_name, email, phone) => {
    return new Promise((resolve, reject) => {
        let query = 'INSERT INTO broker_info (name, last_name, email, phone) VALUES (?, ?, ?, ?)';
        connection.query(query, [name, last_name, email, phone], (err, results) => {
            if (err) {
                console.error('Error creating broker:', err);
                reject(err);
            } else {
                resolve(results);
            }
        });
    });
};

// Handle "Update Broker" action
app.post('/updateBroker', (req, res) => {
    const { old_name, new_name, last_name, email, phone } = req.body;

    updateBrokerByName(old_name, new_name, last_name, email, phone)
        .then(() => {
            res.status(200).send('Broker updated successfully.');
        })
        .catch((error) => {
            console.error(error);
            res.status(500).send('Error updating broker.');
        });
});


const updateBrokerByName = (old_name, new_name, last_name, email, phone) => {
    return new Promise((resolve, reject) => {
        let query = 'UPDATE broker_info SET name=?, last_name=?, email=?, phone=? WHERE name=?';
        connection.query(query, [new_name, last_name, email, phone, old_name], (err, results) => {
            if (err) {
                console.error('Error updating broker:', err);
                reject(err);
            } else {
                resolve(results);
            }
        });
    });
};

app.post('/deleteBroker', (req, res) => {
    const { id } = req.body;

    deleteBroker(id)
        .then(() => {
            res.status(200).send('Broker deleted successfully.');
        })
        .catch((error) => {
            console.error(error);
            res.status(500).send('Error deleting broker.');
        });
});

// delete a broker from the database
const deleteBroker = (id) => {
    return new Promise((resolve, reject) => {
        let query = 'DELETE FROM broker_info WHERE idbroker_info = ?';
        connection.query(query, [id], (err, results) => {
            if (err) {
                console.error('Error deleting broker:', err);
                reject(err);
            } else {
                resolve(results);
            }
        });
    });
};

app.post('/deleteBrokerByName', (req, res) => {
    const { name } = req.body;

    deleteBrokerByName(name)
        .then(() => {
            res.status(200).send('Broker deleted successfully.');
        })
        .catch((error) => {
            console.error(error);
            res.status(500).send('Error deleting broker.');
        });
});

// Function to delete a broker by name from the database
const deleteBrokerByName = (name) => {
    return new Promise((resolve, reject) => {
        let query = 'DELETE FROM broker_info WHERE name = ?';
        connection.query(query, [name], (err, results) => {
            if (err) {
                console.error('Error deleting broker:', err);
                reject(err);
            } else {
                resolve(results);
            }
        });
    });
};