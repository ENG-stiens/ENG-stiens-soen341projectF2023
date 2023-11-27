const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());
app.use(express.static('public'));

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
  });

    const properties = [
      { id: 1, name: '10 Greendale', image: '../images/10Greendale.jpg' },
      { id: 2, name: '5784 Montana', image: '../images/5784Montana.jpeg' },
      { id: 3, name: '770 Parkway', image: '../images/770Parkway.jpg'},
      { id: 4, name: '999 Casablanca', image: '../images/999Casablanca.jpg'},
      { id: 5, name: '67 Grand', image: '../images/67Grand.jpg'},
    ];
    //Read property
    app.get('/api/properties', (req, res) => {
        res.json(properties);
      });
      
      //Create a new property
      app.post('/api/properties/create', (req, res) => {
        const newProperty = req.body;
      
       
        newProperty.id = properties.length + 1;
      
       
        properties.push(newProperty);
      
        console.log('Property created successfully');
        res.json({ success: true, message: 'Property created successfully' });
      });
      
      //Update a property
      app.put('/api/properties/:id/update', (req, res) => {
        const updatedPropertyId = parseInt(req.params.id, 10);
        const updatedData = req.body;
      
        const indexToUpdate = properties.findIndex(property => property.id === updatedPropertyId);
      
        if (indexToUpdate !== -1) {
          properties[indexToUpdate] = { ...properties[indexToUpdate], ...updatedData };
          console.log('Property updated successfully');
          res.json({ success: true, message: 'Property updated successfully' });
        } else {
          console.error('Cannot find property to update');
          res.status(404).json({ success: false, message: 'Property not found' });
        }
      });
      
      //Delete property
      app.delete('/api/properties/:id', (req, res) => {
        const propertyIdToDelete = parseInt(req.params.id, 10);
      
        const indexToDelete = properties.findIndex(property => property.id === propertyIdToDelete);
      
        if (indexToDelete !== -1) {
          properties.splice(indexToDelete, 1);
          console.log('Property deleted successfully');
          res.json({ success: true, message: 'Property deleted successfully' });
        } else {
          console.error('Cannot find property to delete');
          res.status(404).json({ success: false, message: 'Property not found' });
        }
      });
      
      app.listen(port, () => {
        console.log(`Server is running on port ${port}`);
      });
