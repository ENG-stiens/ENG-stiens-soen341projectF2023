const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());
app.use(express.urlencoded({extended: ture}));

app.post('/create-property', async(req, res)); {
 try{
const {title, description, price}=req.body;
const property = new property({title, description, price});
await property.save();
res.status(201).json(property);
res.send('property created successfully');

 } catch(error){
  res.status(500).json({error: 'Could not create property'});
 }
}
