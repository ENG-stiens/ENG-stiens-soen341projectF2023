const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());
app.use(express.urlencoded({extended: ture}));


app.get('/create-property', (req, res) => {
    // Render a form for users to input property details
    res.send('<form method="POST" action="/create-property">' +
      '<input type="text" name="title" placeholder="Title"><br>' +
      '<input type="text" name="description" placeholder="Description"><br>' +
      '<input type="number" name="price" placeholder="Price"><br>' +
      '<button type="submit">Create Property</button>' +
      '</form>'
    );
  });

app.post('/create-property', async(req, res)); {
const {title, description, price}=req.body;
const item = new Item({title, description, price});
properties.push(property);
res.send('property created successfully');
}