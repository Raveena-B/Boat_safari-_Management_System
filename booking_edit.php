<!-- source code:https://www.w3schools.com/howto/howto_css_checkout_form.asp -->

<?php include('src/includes/header.php'); ?>
<?php 
$msg = '';
$error = '';
include('src/includes/config.php');

$booking_id = $_GET['id'];

$stmt =  $dbh->prepare("SELECT * FROM booking WHERE booking_id = ?");
$stmt->bind_param("i", $booking_id);
$stmt->execute();
    
$result = $stmt->get_result();

$booking = $result->fetch_row();


if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
 $fullname=$_POST['firstname'];   
 $email=$_POST['email'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $zip=$_POST['zip'];
 $cname=$_POST['cardname'];
 $ccnum=$_POST['cardnumber'];
 $expmonth=$_POST['expmonth'];
 $expyear=$_POST['expyear'];
 $cvv=$_POST['cvv'];


 $sql="UPDATE booking SET full_name = '$fullname',email='$email',address='$address',city='$city',state='$state',zip='$zip',name_on_card='$cname',credit_card_number='$ccnum',exp_month='$expmonth',exp_year='$expyear',cvv='$cvv' WHERE booking_id= $booking_id";  
 
 if ($dbh->query($sql) === TRUE) {
    $msg="Booking updated successfully !!";
    
    $stmt =  $dbh->prepare("SELECT * FROM booking WHERE booking_id = ?");
    $stmt->bind_param("i", $booking_id);
    $stmt->execute();
    
    $result = $stmt->get_result();

    $booking = $result->fetch_row();

  } else {
    $error="Something went wrong. Please try again ..";
  }
  
  $dbh->close();

}


?>

<link rel="stylesheet" type="text/css" href="src/styles/book_now.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="book_now" class="content">

<div class="row">
<div class="col-75">
<h2> Book Now</h2>
</div>
</div>

<div class="row">
  <div class="col-75">
    <div class="container">
    
      <form id="book_now_form" method="post" onsubmit="event.preventDefault(); validation()">
      <?php if($msg){ ?><span style="color: green;"><?php echo $msg; ?></span><?php } else if($error){ ?> <span style="color: red;"><?php echo $error; ?></span> <?php } ?>
      
        <div class="row">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> Full Name</label><span class="error-msg" id="error-name"></span>
            <input type="text" id="fname"  value = "<?php echo $booking[1]; ?>" name="firstname" placeholder="">
            <label for="email"><i class="fa fa-envelope"></i> Email</label><span class="error-msg" id="error-email"></span>
            <input type="text" id="email" value = "<?php echo $booking[2]; ?>" name="email" placeholder="">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label><span class="error-msg" id="error-adr"></span>
            <input type="text" id="adr" value = "<?php echo $booking[3]; ?>" name="address" placeholder="">
            <label for="city"><i class="fa fa-institution"></i> City</label><span class="error-msg" id="error-city"></span>
            <input type="text" id="city" value = "<?php echo $booking[4]; ?>" name="city" placeholder="">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label><span class="error-msg" id="error-state"></span>
                <input type="text" id="state" value = "<?php echo $booking[5]; ?>" name="state" placeholder="">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label><span class="error-msg" id="error-zip"></span>
                <input type="text" id="zip" value = "<?php echo $booking[6]; ?>" name="zip" placeholder="">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label><span class="error-msg" id="error-cname"></span>
            <input type="text" id="cname" value = "<?php echo $booking[7]; ?>"  name="cardnumber" placeholder="">

            <label for="ccnum">Credit card number</label><span class="error-msg" id="error-ccnum"></span>
            <input type="text" id="ccnum" value = "<?php echo $booking[8]; ?>" name="cardname" placeholder="">
         
            <label for="expmonth">Exp Month</label><span class="error-msg" id="error-expmonth"></span>
            <input type="text" id="expmonth" value = "<?php echo $booking[9]; ?>" name="expmonth" placeholder="">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label><span class="error-msg" id="error-expyear"></span>
                <input type="text" id="expyear" value = "<?php echo $booking[10]; ?>" name="expyear" placeholder="">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label><span class="error-msg" id="error-cvv"></span>
                <input type="text" id="cvv" value = "<?php echo $booking[11]; ?>" name="cvv" placeholder="">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" name="submitbtn" class="btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Packages<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p>Self Drive Boat Safari <span class="price">Rs.4000.00</span></p>
      <p>Family Boat Safari<span class="price">Rs.2000.00</span></p>
      <p>Wild Boat Safari<span class="price">Rs.3000.00</span></p>
      <p>Luxury Boat Safari <span class="price">Rs.7000.00</span></p>
      <hr>
     
    </div>
  </div>
</div>

</div>

<?php include('src/includes/footer.php'); ?>
<!--https://www.youtube.com/watch?v=WY4rvU4ImgE-->
<!--https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_element_scrollintoview2-->
<script type="text/javascript" src="src/js/book_now.js"></script>