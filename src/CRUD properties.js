const express = require('express');
const app = express();
const port = 300;
const { error2 } = require('console');
const mysql = require('mysql');

app.use(express.json());

const connection = mysql.createConnection({
    host: 'localhost',
    user:'newuser',
    password: 'Hello123',
    database: 'realestate',
    insecureAuth: true
});

connection.connect((error) => {
    if(error){
        console.error('Error connecting to database: ', error);
    }else {
        console.log('Conncted to database successfully');
    }
});

module.exports = connection;

//Create operation
app.post('/api/properties/create', (req, res) => {
    const newProperty = req.body;
    const sql = 'Insert property';
    
    connection.query(sql, newProperty, (error, result) => {
        if(error){
        console.error('cannot create property:', error)
        res.status(500).json({ success: false, message: 'cannot create property' });
        } else {
        console.log('property created successfully');
        res.json({success: true, message: 'property created successfully'});
        }
      });
    });

 //Read operation
 app.get('/api/properties', (req, res) => {
    const sql = 'Select from properties';
  
    connection.query(sql, (error, results) => {
      if(error){
          console.error('error reading property: ', error);
          res.status(500).json({success: false, message: 'error reading property'});
      } else {
          console.log('property read successfully');
          res.json({success: true, message: 'propert read successfully'});
      }
    });
  
  });
//Update operation
app.put('/api/properties/:propertyId/update', (req, res) => {
    const propertyId = parseInt(req.params.propertyId, 10);
    const updatedData = req.body;

    const sql = 'update properties SET ? WHRER ID = ?';

    connection.query(sql, [updatedData, propertyId], (error, result) => {
        if(error){
            console.error('cannot update property: ', error);
            res.status(500).json({ success: false, message: 'cannot update property' });
        } else {
            console.log('update completed successfully');
            res.json({ success: true, message: 'update completed successfully' });
       }
        });
    });

 //Delete operation 
 app.delete('/api/properties/:propertyId', (req, res) => {
    const propertyId = parseInt(req.params.propertyId, 10);
    
    const sql = 'delete from properties';
    
        connection.query(sql, propertyId, (error, results) => {
            if(error){
                console.error('Error deleting property: ', error);
                res.status(500).json({success: false, message: 'error deleting property'});
            } else {
                console.log('prperty deleted successfully');
                res.json({success: true, message: 'property deleted successfully'});
            }
        });
        
    });


        app.listen(port, () => {
            console.log('server is sunning on port ${port}')
        });
        
    

    





