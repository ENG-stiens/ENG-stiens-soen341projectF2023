const { error1 } = require('console');
const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    user:'newuser',
    password: 'Hello123',
    database: 'realestate',
    insecureAuth: true
});

connection.connect((error1) => {
    if(error1){
        console.error('Error connecting to database: ', error1);
    }else {
        console.log('Conncted to database successfully');
    }
});
module.exports = connection;

app.post('/api/properties/create', (req, res) => {
const newProperty = req.body;
const sql = 'Insert property';

connection.query(sql, newProperty, (error1, result) => {
    if(error1){
    console.error('cannot create property:', error1)
    res.status(500).json({ success: false, message: 'cannot create property' });
    } else {
    console.log('property created successfully');
    res.json({success: true, message: 'property created successfully'});
    }
  });

});






