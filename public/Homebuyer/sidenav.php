<!DOCTYPE html>
<html>
<head>
<style>
.wrapper {
  display: flex;
}

.sidenav {
    width: 229px;
    height: 100vh;
    position: sticky;
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

.navbox{
    width: 229px;
    height: 71px;
    flex-shrink: 0;
}

.content {
    flex: 1;
    padding: 20px;
    background: #FFF;
}
</style>
</head>
<body>

<div class="wrapper">
  <div class="sidenav">
        <a href="listings.php">Property Listings</a> 
        <a href="appointment.php">Appointment</a>
        <a href="offer.php">Offer</a>
        <a href="bookmarks.php">Bookmarks</a>
        <a href="mortgage.php">Mortgage Calculator</a>
        <a href="profile.php">Profile</a>
  </div>
</div>

</body>
</html>
