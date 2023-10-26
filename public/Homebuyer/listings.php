
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&family=Russo+One&display=swap"
      rel="stylesheet">
    <meta charset="UTF-8">
    <title>Properties for Sale</title>
    <?php
include 'header.php';
include 'sidenav.php';
?>
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

.content {
  flex: 1;
  padding: 20px;
}

.wrapper {
  display: flex;
}

.sidenav {
  width: 250px; /* Adjusted the width to match the margin-left in the .content class */
  height: 100vh;
  position: fixed; /* Changed to fixed for a sticky sidebar */
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  padding-top: 20px;
  background: #2E2C2F;
}

.sidenav a {
  padding: 16px;
  text-decoration: none;
  font-size: 20px;
  display: block;
  color: #EAEAEA;
}

.sidenav a:hover {
  color: #BACDB0;
}

    </style>
  </head>
 
  <body>

    <div class="content">
      <h1>Properties for Sale</h1>
      <div class="gallery">
        <div class="property">
          <a href="10Greendale.php"><img src="10Greendale.jpg" alt="10
              Greendale"></a>
          <p>10 Greendale</p>
        </div>
        <div class="property">
          <a href="5784Montana.php"><img src="5784Montana.jpeg" alt="5784
              Montana"></a>
          <p>5784 Montana</p>
        </div>
        <div class="property">
          <a href="770Parkway.php"><img src="770Parkway.jpg" alt="770 Parkway"></a>
          <p>770 Parkway</p>
        </div>
        <div class="property">
          <a href="999Casablanca.php"><img src="999Casablanca.jpg" alt="999
              Casablanca"></a>
          <p>999 Casablanca</p>
        </div>
        <div class="property">
          <a href="67Grand.php"><img src="67Grand.jpg" alt="67 Grand"></a>
          <p>67 Grand</p>
        </div>
      </div>

      <?php
include 'footer.php';
?>

    </body>
  </html>
