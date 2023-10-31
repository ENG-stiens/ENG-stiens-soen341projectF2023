const { error2 } = require('console');
const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    user:'newuser',
    password: 'Hello123',
    database: 'realestate',
    insecureAuth: true
});

connection.connect((error2) => {
    if(error2){
        console.error('Error connecting to database: ', error2);
    }else {
        console.log('Conncted to database successfully');
    }
});

module.exports = connection;

app.put('/api/properties/:propertyId/update', (req, res) => {
    const propertyId = parseInt(req.params.propertyId, 10);
    const updatedData = req.body;

    const sql = 'update properties. ID = ?';

    connection.query(sql, [updatedData, propertyId], (error2, result) => {
        if(error){
            console.error('cannot update property: ', error2);
            res.status(500).json({ success: false, message: 'cannot update property' });
        } else {
            console.log('update completed successfully');
            res.json({ success: true, message: 'update completed successfully' });
       }
        });
    });

    





