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
                                <a href="#">Mortgage Calculator</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">Renter</a>
                            <div class="dropdown">
                                <a href="#">Search Houses</a>
                                <a href="#">Search Brokers</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">Broker</a>
                            <div class="dropdown">
                                <a href="#">Search Houses filtered by broker</a>
                            </div>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> Your Real Estate Company</p>
        </footer>
    </body>
</html>
