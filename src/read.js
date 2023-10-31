const { error3 } = require('console');
const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    user:'newuser',
    password: 'Hello123',
    database: 'realestate',
    insecureAuth: true
});

connection.connect((error3) => {
    if(error3){
        console.error('Error connecting to database: ', error3);
    }else {
        console.log('Conncted to database successfully');
    }
});

module.exports = connection;

app.get('/api/properties', (req, res) => {
  const sql = 'Select from properties';

  connection.query(sql, (error3, results) => {
    if(error3){
        console.error('error reading property: ', error3);
        res.status(500).json({success: false, message: 'error reading property'});
    } else {
        console.log('property read successfully');
        res.json({success: true, message: 'propert read successfully'});
    }
  });

});
