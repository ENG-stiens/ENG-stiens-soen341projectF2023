//file for the search page
const express = require('express');
const mysql = require('mysql');

const app = express();
const port = 3000;

// Configure MySQL database connection
const db = mysql.createConnection({
    host: 'localhost',
    user: 'newuser',
    password: 'Hello123',
    database: 'realestate',
});

// Connect to the database
db.connect((err) => {
    if (err) {
        console.error('MySQL Connection Error: ' + err.stack);
        return;
    }
    console.log('Connected to MySQL database');
});

app.use(express.static('public')); // Serve static files from the 'public' directory

// Search route
app.get('/search', (req, res) => {
    const searchTerm = req.query.query;

    let sql = `
        SELECT * FROM houses
        WHERE
            MLS_ID LIKE ? OR
            Nb_of_rooms LIKE ? OR
            Nb_of_bathrooms LIKE ? OR
            Construction_year LIKE ? OR
            Street_address LIKE ? OR
            Postal_code LIKE ?
    `;

    const params = [
        `%${searchTerm}%`,
        `%${searchTerm}%`,
        `%${searchTerm}%`,
        `%${searchTerm}%`,
        `%${searchTerm}%`,
        `%${searchTerm}%`
    ];

    db.query(sql, params, (err, houseResults) => {
        if (err) {
            console.error(err);
            res.status(500).json({ error: 'Internal server error' });
        } else {
            // Now, let's also search the "rentals" table
            sql = `
                SELECT * FROM rentals
                WHERE
                    MLS_ID LIKE ? OR
                    Nb_of_rooms LIKE ? OR
                    Nb_of_bathrooms LIKE ? OR
                    Construction_year LIKE ? OR
                    Street_address LIKE ? OR
                    Postal_code LIKE ?
            `;

            db.query(sql, params, (err, rentalResults) => {
                if (err) {
                    console.error(err);
                    res.status(500).json({ error: 'Internal server error' });
                } else {
                    // Combine the results from "houses" and "rentals"
                    const combinedResults = [...houseResults, ...rentalResults];
                    res.json(combinedResults);
                }
            });
        }
    });
});


app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
