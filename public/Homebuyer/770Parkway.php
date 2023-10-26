<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .property-details {
            margin-top: 40px;
            position: relative;
        }

        .property-image {
            position: relative;
            text-align: center;
        }

        .property-image img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .banner {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 10px 20px;
            border-radius: 5px;
        }

        .property-info {
            margin-top: 20px;
            text-align: center;
        }

        h1, h2 {
            color: #333;
        }

        .realtor {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
    <?php
include 'header.php';
include 'sidenav.php';
?>
    </head>
    <body>
        <div class="content">
        <a href="listings.php" style="text-decoration: none; color: #333; display: inline-block; margin-bottom: 20px;">
        &larr; Property Listings
    </a>
            <body>
                <div class="property-details">
                    <div class="property-image">
                        <img src="770Parkway.jpg" alt="770 Parkway">
                        <div class="banner">
                            <p>Realtor: ABC Realty</p>
                        </div>
                        <div class="realtor">
                            <h3>ABC Realty</h3>
                            <p>Contact: 123-456-7890</p>
                        </div>
                    </div>
                    <div class="property-info">
                        <h1>770 Parkway</h1>
                        <h2>Beautiful Single Family Home</h2>
                        <p>Price: $200,000</p>
                        <p>Date Posted: October 13, 2023</p>
                        <p>Amenities: Spacious backyard, modern kitchen, garage</p>
                        <p>Description: A charming single-family home with
                            modern amenities and a spacious backyard.</p>
                    </div>
                </div>
            </body>
        </div>
        <?php
include 'footer.php';
?>
    </body>
</html>