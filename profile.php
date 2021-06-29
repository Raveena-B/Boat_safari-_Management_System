<!--http://codewithawa.com/posts/image-preview-and-upload-using-php-and-mysql-database-->
<!-- source code:https://www.w3schools.com/howto/howto_css_checkout_form.asp -->
<!--https://www.youtube.com/watch?v=z5eL6TStPws&t=151s-->
<!--https://www.tutorialspoint.com/php/php_file_uploading.htm-->
<!--https://www.tutorialspoint.com/php/php_validation_example.htm--><!--email validation(php)-->
<?php include('src/includes/header.php'); ?>
<?php 

include('src/includes/config.php');

if($_SESSION){
  $user = $_SESSION['user'];
}

$msg = '';
$error = '';
if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
 $user_id = $user[0];   
 $firstname=$_POST['firstname'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $tel=$_POST['tel'];
 $dob=$_POST['DOB'];
 $gen=$_POST['gen'];
 $password=$_POST['psw'];



 $sql="UPDATE user SET first_name = '$firstname', email = '$email', address = '$address', phone = '$tel', dob = '$dob',  gender = '$gen', password =  '$password', city =  '$city' WHERE user_id = $user_id";


if ($dbh->query($sql) === TRUE) {
    $msg="User registered successfully !!";
    
    $stmt =  $dbh->prepare("SELECT * FROM user WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    
    $result = $stmt->get_result();

    $row = $result->fetch_row();
    $_SESSION['user'] = $row;
    $user = $_SESSION['user'];

  } else {
    $error="Something went wrong. Please try again ..";
  }
  
  $dbh->close();
}

?>
<link rel="stylesheet" type="text/css" href="src/styles/profile.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="content">
<div id="profile" class="container center">
    <form method="post" enctype="multipart/form-data" onsubmit="event.preventDefault(); validation()">
      <b><h2>User Profile</h2>

            
			<label for="fname"><i class="fa fa-user">&nbsp</i> Full Name</label><span class="error-msg" id="error-Fname"></span>
            <input type="text" id="Fname" name="firstname" value = "<?php echo $user[1]; ?>" placeholder="">
			
            <label for="email"><i class="fa fa-envelope">&nbsp</i> Email</label><span class="error-msg" id="error-email"></span>
            <input type="text" id="email" name="email" value = "<?php echo $user[2]; ?>" placeholder="">
			
            <label for="adr"><i class="fa fa-address-card-o">&nbsp</i> Address</label><span class="error-msg" id="error-address"></span>
            <input type="text" id="adress" name="address" value = "<?php echo $user[3]; ?>" placeholder="">
			
            <label for="city"><i class="fa fa-institution">&nbsp</i> City</label><span class="error-msg" id="error-city"></span>
            <input type="text" id="city" name="city" value = "<?php echo $user[8]; ?>" placeholder="" >
			
			<label for="phone"><i class="fa fa-phone">&nbsp</i> Phone</label><span class="error-msg" id="error-tel"></span>
            <input type="text" id="tel" name="tel" value = "<?php echo $user[4]; ?>" placeholder="">
			
			<label for="DOB">&nbsp</i> DOB</label>
            <input type="date" id="DOB" name="DOB" value = "<?php echo $user[5]; ?>"  placeholder="">
			
			<label for="Gender">&nbsp</i> Gender</label>
<input type="radio" name="gen" value="male" <?php if($user[6] == 'male'){ ?> checked <?php } ?>>Male&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gen" value="female" <?php if($user[6] == 'female'){ ?> checked <?php } ?>>Female<br><br>
			
			<label for="Pword">Password</label>
            <input type="password" id="Pword"  name="psw" value="<?php echo $user[7]; ?>" 
			title="Should contain at least 1 number and 1 Uppercase and lowercase letter,and at least 10 or more characters">

      <div class="message" id="message" style="display:none;">
  <p>Password must contain the following:</p>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div> 
			
			<input type="checkbox" onclick="showPassword()">Show Password<br><br>
			
			<label for="RePword">Re-enter Password</label><span class="error-msg" id="confirm-msg"></span>
            <input type="password" id="RePword" name="RePword">
						
			
			<button class="submit" id="submitbtn" type="submit" desabled>Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="submit" id="cancelbtn" type="reset" desabled>Cancel</button><br><br><br><br>
			
    


	
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


function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}

function showPassword() {
  var x = document.getElementById("Pword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>