<!-- source code:www.w3schools.com-->

<?php include('src/includes/header.php'); ?>
<?php 
$msg = '';
$error = '';
include('src/includes/config.php');

$contact_id = $_GET['id'];

$stmt =  $dbh->prepare("SELECT * FROM contact WHERE contact_id = ?");
$stmt->bind_param("i", $contact_id);
$stmt->execute();
    
$result = $stmt->get_result();

$contact = $result->fetch_row();

if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
    
 $firstname=$_POST['first_name'];
 $lastname=$_POST['last_name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $msg=$_POST['msg'];

 $sql="UPDATE contact SET first_name='$firstname',last_name='$lastname',email='$email',phone='$phone',message='$msg' WHERE contact_id= $contact_id";  

 if ($dbh->query($sql) === TRUE) {
    $msg="Contact Us Update successfully !!";
    
    $stmt =  $dbh->prepare("SELECT * FROM contact WHERE contact_id = ?");
    $stmt->bind_param("i", $contact_id);
    $stmt->execute();
    
    $result = $stmt->get_result();

    $contact = $result->fetch_row();

  } else {
    $error="Something went wrong. Please try again ..";
  }
  
  $dbh->close();

}



?>

<link rel="stylesheet" type="text/css" href="src/styles/contact_us.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div id="contactus" class="content">
<div class="row">
  <div class="column">
  <div class="contact-form">
         <h1>CONTACT US</h1>
         <h2>Your Details</h2>
         <p>Let us know how to get back to you</p>
         <?php if($msg){ ?><span style="color: green;"><?php echo $msg; ?></span><?php } else if($error){ ?> <span style="color: red;"><?php echo $error; ?></span> <?php } ?>
         <form name="myForm"   method="post" onsubmit="return validateForm()"> 
         <div class="txtb">
             <label>First Name: </label>
             <input type="text" name="first_name" id="firstname" value = "<?php echo $contact[1]; ?>" placeholder="Enter Your FirstName">
         </div>

         <div class="txtb">
             <label>Last Name: </label>
             <input type="text" name="last_name" id="lastname" value = "<?php echo $contact[2]; ?>" placeholder="Enter Your LastName ">
         </div>

         <div class="txtb">
             <label>E-mail: </label>
             <input type="email" name="email" id="email"  value = "<?php echo $contact[3]; ?>" placeholder="Enter Your Email">
         </div>

         <div class="txtb">
             <label>Phone Number: </label>
             <input type="text" name="phone" id="phone"  value = "<?php echo $contact[4]; ?>" placeholder="Enter Your Phone Number">
         </div>

         <div class="txtb">
             <label>Message: </label>
             <textarea name="msg" style="width: -webkit-fill-available"><?php echo $contact[5]; ?></textarea>
         </div>
         <input type="submit" name = "submit" value="Update" class="btn">
     </form> 
     </div>
  </div>
  <div class="column">
  <div class = "contactInfo">
        <div class = "box">
           <div class = "icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            <div class = "text">
               <h3>Address</h3>
               <p>No:40/5,<br>Premrose Garden,<br>Colombo8,<br>Sri Lanka</p>
            </div>
        </div>
        <div class = "box">
           <div class = "icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div class = "text">
               <h3>Phone</h3>
               <p>0771234567</p>
            </div>
        </div>
        <div class = "box">
           <div class = "icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <div class = "text">
               <h3>Email</h3>
               <p>galaxyboatsafari@gmail.com</p>
            </div>
        </div>
       </div>
  </div>
</div>

     
</div>

<script type="text/javascript">
 function validateForm() {
  var name = document.forms["myForm"]["first_name"].value;
  var last_name = document.forms["myForm"]["last_name"].value;
  var email = document.forms["myForm"]["email"].value;
  var phone = document.forms["myForm"]["phone"].value;
  var msg = document.forms["myForm"]["msg"].value;

  if (name == "") {
    alert("First name must be filled out");
    return false;
  }
  if (last_name == "") {
    alert("Last name must be filled out");
    return false;
  }
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  if (phone == "") {
    alert("Phone number must be filled out");
    return false;
  }
  if (msg == "") {
    alert("Message must be filled out");
    return false;
  }
}
</script>



