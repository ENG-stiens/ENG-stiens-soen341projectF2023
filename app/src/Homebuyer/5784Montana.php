<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&family=Russo+One&display=swap"
            rel="stylesheet">
        <meta charset="UTF-8">
        <title>5784 Montana </title>
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
    </head>
    <body>

        <header>
            <h1 class="title">Title</h1>
            <span id="current-time"></span>
            <script>
       function updateTime() {
        const now = new Date();
        const time = now.toLocaleTimeString();
        const options = { weekday: 'short', month: 'short', day: 'numeric' };
        const date = now.toLocaleDateString('en-US', options);
        document.getElementById('current-time').textContent = `${date} ${time}`;
    }
    setInterval(updateTime, 1000);
  </script>
        </header>

        <div class="sidenav">
            <a href="home.html">Home</a>
            <a href="profile.html">Profile</a>
            <a href="appointment.html">Appointment</a>
            <a href="offer.html">Offer</a>
            <a href="bookmarks.html">Bookmarks</a>
            <a href="mortgage.html">Mortgage Calculator</a>
            <a href="listings.html">Property Listings</a>
            <a href="">Log Out</a> <!-- CHANGE -->
        </div>

        <div class="content">
            <body>
                <div class="property-details">
                    <div class="property-image">
                        <img src="5784Montana.jpeg" alt="5784 Montana">
                        <div class="banner">
                            <p>Realtor: ABC Realty</p>
                        </div>
                        <div class="realtor">
                            <h3>ABC Realty</h3>
                            <p>Contact: 123-456-7890</p>
                        </div>
                    </div>
                    <div class="property-info">
                        <h1>5784 Montana</h1>
                        <h2>Beautiful Single Family Home</h2>
                        <p>Price: $300,000</p>
                        <p>Date Posted: October 13, 2023</p>
                        <p>Amenities: Spacious backyard, modern kitchen, garage</p>
                        <p>Description: A charming single-family home with
                            modern amenities and a spacious backyard.</p>
                    </div>
                </div>
            </body>
        </div>

    </body>
</html>