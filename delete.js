const { error4 } = require('console');
const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    user:'newuser',
    password: 'Hello123',
    database: 'realestate',
    insecureAuth: true
});

connection.connect((error4) => {
    if(error4){
        console.error('Error connecting to database: ', error4);
    }else {
        console.log('Conncted to database successfully');
    }
});

module.exports = connection;

app.delete('/api/properties/:propertyId', (req, res) => {
    const propertyId = parseInt(req.params.propertyId, 10);

    const sql = 'delete from properties';

    connection.query(sql, propertyId, (error4, results) => {
        if(error4){
            console.error('Error deleting property: ', error4);
            res.status(500).json({success: false, message: 'error deleting property'});
        } else {
            console.log('prperty deleted successfully');
            res.json({success: true, message: 'property deleted successfully'});
        }
    });
    
});
