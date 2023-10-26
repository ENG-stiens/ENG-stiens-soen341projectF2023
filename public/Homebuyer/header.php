<!DOCTYPE html>
<html lang="en">
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #EAEAEA; 
}

header, .dropdown{
  background-color: #BACDB0;
}

header {
  
  color: #2E2C2F; 
  padding: 10px 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: center;
  position: relative;
}
.title-container{
  text-align: center;
  
  display: flex;
  flex-direction: column;
  align-items: center;
 
}
header h1 {
  display: flex;
  align-items: center;
  gap: 10px;
}


header h1 img {
  margin-right: 15px; 
  width: 40px; 
}

nav ul {
  list-style: none;
  padding-top:10px;
  display: flex;
  gap: 20px;
  justify-content: center;
}
nav li{
  position:relative;
}
nav a, .dropdown a {
  text-decoration: none;
  color: #475B63; 
  padding: 5px 10px;
  border-radius: 5px;
  transition: background-color 0.2s;
}

nav a:hover, .dropdown a:hover {
  background-color: #729B79; 
}

.login-button {
  background-color: #475B63; 
  padding: 8px 16px;
  border: none;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  transition: background-color 0.2s;
  position: fixed;
  top: 10px;
  right: 20px;
}

.login-container {
  display: flex;
  justify-content: flex-end;
  padding: 10px;
}

.dropdown {
  display: none;
  position: absolute; 
  z-index: 1;
  left: 0; 
  top: 100%;
  border-radius: 5px; 
  box-shadow: 0px 4px 8px rgba(0,0,0,0.1); 
}


nav li:hover .dropdown {
  display: block;
}

footer {
  background-color: #729B79;
  color: white;
  padding: 10px 20px;
  text-align: center;
}
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
  }
</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversalHomepage</title>
</head>
<body>
  <header>
    <div class="title-container">
      <h1>
        <button onclick="displayModal()">Log in</button>
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
  </header>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span onclick="closeModal()" style="float:right; cursor:pointer;">&times;</span>
      <h2>Login</h2>
      <form method="post" action="login.php">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
      </form>
    </div>
  </div>

  <script>
    function displayModal() {
      document.getElementById("myModal").style.display = "block";
    }
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
  </script>
</body>
</html>
