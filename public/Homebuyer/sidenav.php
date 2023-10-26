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
        <a href="home.html">Home</a>
        <a href="profile.html">Profile</a>
        <a href="appointment.html">Appointment</a>
        <a href="offer.html">Offer</a>
        <a href="bookmarks.html">Bookmarks</a>
        <a href="mortgage.html">Mortgage Calculator</a>
        <a href="listings.html">Property Listings</a>
        <a href="">Log Out</a>
  </div>

  <div class="content">
    <!-- Add your main content here -->
  </div>
</div>

</body>
</html>
