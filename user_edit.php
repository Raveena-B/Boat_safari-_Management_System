<?php include('src/includes/header.php'); ?>
<!-- source code:https://www.w3schools.com/howto/howto_css_checkout_form.asp -->

<?php 
include('src/includes/config.php');
$user_id = $_GET['id'];

$stmt =  $dbh->prepare("SELECT * FROM user WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
    
$result = $stmt->get_result();

$user = $result->fetch_row();

$msg = '';
$error = '';
if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
    
 $firstname=$_POST['firstname'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $tel=$_POST['tel'];
 $dob=$_POST['DOB'];
 $gen=$_POST['gen'];
 $password=$_POST['psw'];

 $sql="UPDATE user SET first_name='$firstname',email='$email',address='$address',phone='$tel',dob='$dob',gender='$gen',password='$password',city='$city' WHERE user_id= $user_id";
 
 if ($dbh->query($sql) === TRUE) {
    $msg="User Details updated successfully !!";
    
    $stmt =  $dbh->prepare("SELECT * FROM user WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    
    $result = $stmt->get_result();

    $user = $result->fetch_row();

  } else {
    $error="Something went wrong. Please try again ..";
  }
  
  $dbh->close();

}



?>

<link rel="stylesheet" type="text/css" href="src/styles/registration.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="content">
<div id="registration" class="container center">    
<?php if($msg){ ?><span style="color: green;"><?php echo $msg; ?></span><?php } else if($error){ ?> <span style="color: red;"><?php echo $error; ?></span> <?php } ?>
		<form id="registration_form"  method="post" onsubmit="event.preventDefault(); validation()"  method="post"><b><h2>User Details</h2></b>
			<label for="fname"><i class="fa fa-user">&nbsp</i> Full Name</label><span class="error-msg" id="error-Fname"></span>

            <input type="text" id="Fname" value = "<?php echo $user[1]; ?>" name="firstname" placeholder="">
			
            <label for="email"><i class="fa fa-envelope">&nbsp</i> Email</label><span class="error-msg" id="error-email"></span>
            <input type="text" id="email" value = "<?php echo $user[2]; ?>" name="email" placeholder="">
			
            <label for="adr"><i class="fa fa-address-card-o">&nbsp</i> Address</label><span class="error-msg" id="error-address"></span>
            <input type="text" id="address" value = "<?php echo $user[3]; ?>" name="address" placeholder="">
			
            <label for="city"><i class="fa fa-institution">&nbsp</i> City</label><span class="error-msg" id="error-city"></span>
            <input type="text" id="city" value = "<?php echo $user[8]; ?>" name="city" placeholder="" >
			
			<label for="phone"><i class="fa fa-phone">&nbsp</i> Phone</label><span class="error-msg" id="error-tel"></span>
            <input type="text" id="tel" value = "<?php echo $user[4]; ?>" name="tel" placeholder="" >
			
			<label for="DOB">&nbsp</i> DOB</label>
            <input type="date" id="DOB" value = "<?php echo $user[5]; ?>" name="DOB" placeholder="">
			
			<label for="Gender">&nbsp</i> Gender</label>
            <input type="radio" name="gen" value = "<?php echo $user[6]; ?>" value="male" checked>Male&nbsp;&nbsp;&nbsp;
			      <input type="radio" name="gen" value="Female">Female<br><br>
			
			<label for="Pword">Password</label>
            <input type="password" id="Pword" name="psw" value = "<?php echo $user[7]; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
			

             <div class="message" id="message" style="display:none;">
  <p>Password must contain the following:</p>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div> 
			<input type="checkbox" onclick="showPassword()">Show Password<br><br>
			
			<label for="RePword">Re-enter Password</label><span class="error-msg" id="confirm-msg"></span>
            <input type="password" id="RePword" name="RePword" >
			
			
			<button class="submit" id="submitbtn" name="submitbtn" type="submit" desabled>Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="submit" id="cancelbtn" name="cancelbtn" type="reset" desabled>Cancel</button><br><br><br><br>
			
    </form>
</div>
</div>

    <?php include('src/includes/footer.php'); ?>
    

<!--https://www.youtube.com/watch?v=WY4rvU4ImgE-->
<!--https://www.w3schools.com/howto/howto_js_password_validation.asp--><!--password validations-->
<!--https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_element_scrollintoview2-->

    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}




function validation(){

var fname=document.getElementById("Fname").value;
var email=document.getElementById("email").value;
var adr=document.getElementById("address").value;	
var city=document.getElementById("city").value;
var tel=document.getElementById("tel").value;	
var dateOfBirth=document.getElementById("DOB").value;	

if(fname.length<5){
     text="Please Enter valid Name"
     document.getElementById('error-Fname').innerHTML=text;
     var elmnt = document.getElementById("registration");
     elmnt.scrollIntoView();
     return false;  
}else{
  document.getElementById('error-Fname').innerHTML= '';
}

if(email.indexOf('@') == -1 || email.length<6){
     text="Please Enter valid Email"
     document.getElementById('error-email').innerHTML=text;
     var elmnt = document.getElementById("registration");
     elmnt.scrollIntoView();
     return false;  
 }else{
  document.getElementById('error-email').innerHTML= '';
} 

 if(adr.length<5){
     text="Please Enter valid Address"
     document.getElementById('error-address').innerHTML=text;
     var elmnt = document.getElementById("registration");
     elmnt.scrollIntoView();
     return false;  
 }else{
  document.getElementById('error-address').innerHTML= '';
} 

if(city.length<1){
     text="Please Enter valid City Name"
     document.getElementById('error-city').innerHTML=text;
     var elmnt = document.getElementById("registration");
     elmnt.scrollIntoView();
     return false;  
 } else{
  document.getElementById('error-city').innerHTML= '';
} 

 if(tel.length<1){
     text="Please Enter valid phone number"
     document.getElementById('error-tel').innerHTML=text;
     var elmnt = document.getElementById("registration");
     elmnt.scrollIntoView();
     return false;  
 } else{
  document.getElementById('error-tel').innerHTML= '';
} 



 
 document.getElementById("registration_form").submit();

}

function showPassword() {
  var x = document.getElementById("Pword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

var myInput = document.getElementById("Pword");

var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

$('#Pword, #RePword').on('keyup', function () {
  if ($('#Pword').val() == $('#RePword').val()) {
    $('#confirm-msg').html('');
  } else 
    $('#confirm-msg').html('Not Matching');
});
</script>