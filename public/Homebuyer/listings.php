
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
    <title>Properties for Sale</title>
    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f4;
      }
  
      h1 {
        text-align: center;
        margin-top: 40px;
        color: #333;
      }
  
      .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        margin-top: 40px;
      }
  
      .property {
        margin: 20px;
        text-align: center;
        color: #333;
        width: 30%;
      }
  
      .property img {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        border: 1px solid #ddd;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>

    <header>
      <h1 class="title">Title</h1>

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
      <h1>Properties for Sale</h1>
      <div class="gallery">
        <div class="property">
          <a href="10Greendale.html"><img src="10Greendale.jpg" alt="10
              Greendale"></a>
          <p>10 Greendale</p>
        </div>
        <div class="property">
          <a href="5784Montana.html"><img src="5784Montana.jpeg" alt="5784
              Montana"></a>
          <p>5784 Montana</p>
        </div>
        <div class="property">
          <a href="770Parkway.html"><img src="770Parkway.jpg" alt="770 Parkway"></a>
          <p>770 Parkway</p>
        </div>
        <div class="property">
          <a href="999Casablanca.html"><img src="999Casablanca.jpg" alt="999
              Casablanca"></a>
          <p>999 Casablanca</p>
        </div>
        <div class="property">
          <a href="67Grand.html"><img src="67Grand.jpg" alt="67 Grand"></a>
          <p>67 Grand</p>
        </div>
      </div>


    </body>
  </html>
