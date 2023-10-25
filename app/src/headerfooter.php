<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UniversalHomepage</title>
        <link rel="stylesheet" href="styles.css">
       
    </head>
    <body>
        <header>
            <button class="login-button">Log in</button>

            <div class="title-container">
               <h1>
                    <img src="house.png" alt="Logo">
                    Eng-Stiens' Real Estate Aid
                    
               </h1>

            
                <nav>
                    <ul>
                        <li>
                         <a href="#">Homebuyer</a>
                         <div class="dropdown">
                                <a href="#">Search Houses</a>
                                <a href="#">Search Brokers</a>
                                <a href="#">Morgage Calulator</a>
                            </div>
                        </li>
                      <li><a href="#">Renter</a>
                            <div class="dropdown">
                                <a href="#">Search Houses</a>
                                <a href="#">Search Brokers</a>
                            </div></li>
                     <li><a href="#">Broker</a>
                        <div class="dropdown">
                            <a href="#">Search Houses filtered by broker</a>
                        </div></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
             </nav>
            </div>
            <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
        echo '<div class="dropdown">';
        echo '<img src="user_icon.png" alt="User Icon">';
        echo '<div class="dropdown-content">';
        echo '<a href="logout.php">Logout</a>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<a href="login.php">Login</a>';
        echo '<a href="createAccount.php">Create an Account</a>';
    }
    ?>
        </header>

        <footer>
            <p>&copy; 2023 Your Real Estate Company</p>
        </footer>
    </body>
</html>
