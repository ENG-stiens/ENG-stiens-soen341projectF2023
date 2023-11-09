
//Create connection with database
var mysql = require('mysql');
const express = require("express");
const path = require("path");

const app = express();
app.use(express.json());
app.use(express.urlencoded({ extended: false }));


const port = 3000;
    
var con = mysql.createConnection({
    host: "localhost",
    user: "newuser",
    password: "Hello123",
    database: "realestate",
    insecureAuth : true
});
//

con.query('SELECT * FROM realestate.houses',(err,result,fields)=>{
    if (err){
        return console.log(err);
    }
    return console.log(result);
    
});

con.query('SELECT * FROM realestate.brokers',(err,result,fields)=>{
    if (err){
        return console.log(err);
    }
    return console.log(result);
    
});

con.end();
// check if app connection was successful
app.listen(3000, function (){
    console.log("App listening on port 3000");
});

//app.use(express.static('public'));
app.use(express.static(path.join(__dirname, '..', 'public')));


// Serve static files from the 'public' directory
//app.use(express.static(path.join(__dirname, 'public')));


// Display ManageBrokers.html at http://localhost:3000/managebrokers
app.get('/managebrokers', (req, res) => {
    const filePath = path.join(__dirname, '..', 'public','Administrator', 'ManageBrokers.html');
    res.sendFile(filePath);
});

// get request to search for brokers in the database
app.get('/searchBrokers', (req, res) => {
    const search = req.query.search;
    // sql query to search for broker information
    const sql = `
        SELECT id, firstname, phone, email, lastname
        FROM brokers
        WHERE firstname LIKE ? OR lastname LIKE ?
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

// CRUD Operations

/// create post to add broker
app.post('/createBroker', (req, res) => {
    const { id, firstname, phone, email, lastname } = req.body;

    createBroker(id, firstname, phone, email, lastname)
        .then(() => {
            res.status(200).send('Broker created');
        })
        .catch((error) => {
            console.error(error);
            res.status(500).send('Error');
        });
});

// Create a broker(back-end)
const createBroker = (id, firstname, phone, email, lastname) => {
    return new Promise((resolve, reject) => {
        let query = 'INSERT INTO brokers (id, firstname, phone, email, lastname) VALUES (?, ?, ?, ?, ?)';
        con.query(query, [id, firstname, phone, email, lastname], (err, results) => {
            if (err) reject(err);
            resolve(results);
        });
    });
};

// Read brokers(back-end)
const readBrokers = () => {
    return new Promise((resolve, reject) => {
        let query = 'SELECT * FROM brokers';
        con.query(query, (err, results) => {
            if (err) reject(err);
            resolve(results);
        });
    });
};

/// create post to update broker in the database
app.post('/updateBroker', (req, res) => {
    const { id, firstname, phone, email, lastname} = req.body;

    updateBroker(id, firstname, phone, email, lastname)
        .then(() => {
            res.status(200).send('Broker updated');
        })
        .catch((error) => {
            console.error(error);
            res.status(500).send('Error.');
        });
});

// Update a broker(back-end)
const updateBroker = (id, firstname, phone, email, lastname) => {
    return new Promise((resolve, reject) => {
        let query = 'UPDATE brokers SET firstname = ?, phone = ?, email?, lastname? WHERE id = ?';
        con.query(query, [id, firstname, phone, email, lastname], (err, results) => {
            if (err) reject(err);
            resolve(results);
        });
    });
};


/// post to delete broker by ID
app.post('/deleteBroker', (req, res) => {
    const { id } = req.body; // Updated variable name

    deleteBroker(id)
        .then(() => {
            res.status(200).send('Broker deleted');
        })
        .catch((error) => {
            console.error(error);
            res.status(500).send('Error');
        });
});

// Delete a broker(back-end)
const deleteBroker = (id) => {
    return new Promise((resolve, reject) => {
        let query = 'DELETE FROM brokers WHERE id = ?';
        con.query(query, id, (err, results) => {
            if (err) reject(err);
            resolve(results);
        });
    });
};

//Search for a broker
app.get('/searchBrokers', (req, res) => {
    const search = req.query.search;

    // sql query to search for broker information
    const sql = `
        SELECT id, firstname, phone, email, lastname
        FROM brokers
        WHERE firstname LIKE ? OR lastname LIKE ?
    `;
    const searchTerm = `%${search}%`;

    con.query(sql, [searchTerm, searchTerm], (err, results) => {
        if (err) {
            console.error('Cannot find brokers: ' + err.stack);
            res.status(500).json({ error: 'Internal Server Error' });
            return;
        }
        // send the results as JSON
        res.json(results);
    });
});


