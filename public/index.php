/* main homepage */

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .background {
        background-image: url('//5784Montana.jpeg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        color: #ffffff;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    .overlay h1 {
        text-align: center;
        margin: 0;
        padding: 20px 0;
        font-size: 3em;
        text-align: center;
    }
    </style>

     <?php
     include 'header.php';
          ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>

    <div class="background">
    <div class="overlay">
    <h1>Welcome to Eng-Stiens' Real Estate Aid</h1>
    </div>
    </div>

      <?php
      include 'footer.php';
      ?>
    </body>
    </html>