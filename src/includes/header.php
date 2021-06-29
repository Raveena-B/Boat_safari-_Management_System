<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="src/styles/base.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="header">
     
   <a id="Logo" ><img src="src/images/logo1.png" alt="CompanyLogo" height="200px" width="200px" align="left" bottom="-18px"></a>
  <h2 style="color:#ffffff;">GALAXY BOAT SAFARI</h2>
  <p style="color:#fff;"><i><b>Cruises, Saling & Water Tours in Sri Lanka</b></i></p>
</div>

<div id="navbar" class="navbar" style="z-index: 999999;">
  <a class="active" href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">User Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="registration.php">Registration</a>
      <a href="user_list.php">Users</a>
      <a href="login.php">Login</a>
      <?php if($_SESSION){?><a href="profile.php">User Profile</a><?php } ?>
    </div>
  </div> 
  <a href="package.php">Packages</a>

  <div class="dropdown">
   <button class="dropbtn">Tour Booking
   <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="book_now.php">Booking Form</a>
      <a href="t&c.php">Terms & Conditions</a>
      <a href="p&p.php">Privacy Pollicy</a>
      <a href="booking_list.php">Bookings</a>
      <a href="feedback_list.php">Feedback Edid/Delete</a>
      <a href="contactus_list.php">ContactUs Edid/Delete</a>
     
    </div>
  </div> 
   
  <a href="map.php">Location</a>
  <a href="gallery.php">Gallery</a>
  <a href="news.php">News</a>
  <a href="driver.php">Driver/Guide</a>
  <a href="feedback.php">Feedback</a>
  <a href="faq.php">FAQ</a>
  <a href="contact_us.php">Contact Us</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

</div>

