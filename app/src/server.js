// notes: this file will need to be modified when we connect all the functionalities together
// also need to fix directories when we merge
/* I am using mysql workbench to configure the database. My table name for brokers is "broker_info"
* if you want to work with this code for testing here's how you should name database stuff
* Database name: brokers_database
* brokers table name: broker_info
* table columns: idbroker_info, name, last_name, email, phone
*
* also add some values to the database from mysql workbench or the software you are using
* */
const mysql = require("mysql");
const express = require("express");
const path = require("path");
const app = express();


// create connection to database
// your credentials will be different
// see mysql workbench or the software you are using for databases to find the configurations
// this connection is only for testing, eventually we will connect all our sql tables to one database
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

// Define routes and render different HTML pages
// this should display "Welcome to the homepage" at http://localhost:3000/
app.get('/', (req, res) => {
    res.send('Welcome to the homepage');
});

// to get directories
app.use(express.static(__dirname));

// displays CRUD_brokers.html to the http://localhost:3000/managebrokers directory
app.get('/managebrokers', function (req, res) {
    res.sendFile(path.join(__dirname, 'CRUD_brokers.html'));
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
