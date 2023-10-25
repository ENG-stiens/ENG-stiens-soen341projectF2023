
//Create connection with database
var mysql = require('mysql');
    
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


// CRUD Operations

// Create a broker
const createBroker = (id, firstname, phone, email, lastname) => {
    return new Promise((resolve, reject) => {
        let query = 'INSERT INTO brokers (id, name, phone) VALUES (?, ?, ?)';
        con.query(query, [id, firstnamename, phone, email, lastname], (err, results) => {
            if (err) reject(err);
            resolve(results);
        });
    });
};

// Read brokers
const readBrokers = () => {
    return new Promise((resolve, reject) => {
        let query = 'SELECT * FROM brokers';
        con.query(query, (err, results) => {
            if (err) reject(err);
            resolve(results);
        });
    });
};

// Update a broker
const updateBroker = (id, firstnamename, phone, email, lastname) => {
    return new Promise((resolve, reject) => {
        let query = 'UPDATE brokers SET name = ?, phone = ? WHERE id = ?';
        con.query(query, [name, phone, id], (err, results) => {
            if (err) reject(err);
            resolve(results);
        });
    });
};

// Delete a broker
const deleteBroker = (id) => {
    return new Promise((resolve, reject) => {
        let query = 'DELETE FROM brokers WHERE id = ?';
        con.query(query, id, (err, results) => {
            if (err) reject(err);
            resolve(results);
        });
    });
};

module.exports = {
    createBroker,
    read
}


