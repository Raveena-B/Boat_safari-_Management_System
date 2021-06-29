<!--source code page:https://www.mockplus.com/blog/post/contact-us-page-template-->
<!--source code for java:https://www.youtube.com/watch?v=WY4rvU4ImgE-->
<!--source code for java:https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_element_scrollintoview2-->


<?php include('src/includes/header.php'); ?>

<?php 
include('src/includes/config.php');
$msg = '';
$error = '';
if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
    
 $name=$_POST['name'];
 $email=$_POST['email'];
 $feedback=$_POST['feedback'];
 $package_type=$_POST['package_type'];
 $message=$_POST['message'];


 $sql="INSERT INTO feedback(name,email,feedback_type,package_type,comment) VALUES('$name','$email','$feedback','$package_type','$message')";

if ($dbh->query($sql) === TRUE) {
    $msg="Feedback send successfully !!";
  } else {
    $error="Something went wrong. Please try again ..";
  }
  
  $dbh->close();



}

?>

<link rel="stylesheet" type="text/css" href="src/styles/feed_back.css">

<div id="feed_back" class="content">
<header>
	<h1>Feedback</h1>
</header>

<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

<form id="waterform" method="post" onsubmit="event.preventDefault(); validation()">

<?php if($msg){ ?><span style="color: green;"><?php echo $msg; ?></span><?php } else if($error){ ?> <span style="color: red;"><?php echo $error; ?></span> <?php } ?>

<div class="formgroup" id="name-form">
    <label for="name">Your name*</label><span class="error-msg" id="error-fname"></span>
    <input type="text" id="name" name="name" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">Your e-mail*</label><span class="error-msg" id="error-email"></span>
    <input type="email" id="email" name="email" />
</div>

<div class="formgroup">
	<label for="feedback">Feedback type*</label><span class="error-msg" id="error-feedback"></span>
	<select id="feedback" name="feedback" >
  <option value="">Select Feedback</option>
	<option value="happy">Happy</option>
    <option value="satisfied">Satisfied</option>
    <option value="lovely">Lovley</option>
    <option value="bad">Bad</option> 
	</select>
</div>

<div class="formgroup">
	<label for="package_type">Package type*</label><span class="error-msg" id="error-package_type"></span>
	<select id="package_type" name="package_type" >
  <option value="">Select Package Type</option>
		<option value="selfeDrive">Self Drive Boat Safari</option>
		<option value="family">Family Boat Safari</option>
		<option value="wild">Wild Baot Safari</option>
		<option value="luxury">Luxury Boat Safari</option>
	</select>
</div>

<div class="formgroup" id="message-form">
    <label for="message">Your message</label>
    <textarea id="message" name="message"></textarea>
</div>


	<input type="submit" value="Send your message!" />
</form>
</div>

</div>

<?php include('src/includes/footer.php'); ?>

<script  type="text/javascript">


if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

  function validation(){

 
var fname=document.getElementById("name").value;
var email=document.getElementById("email").value;
var feedback=document.getElementById("feedback").value;	
var package_type=document.getElementById("package_type").value;

	if(fname.length<5){
		   text="Please Enter valid Name"
		   document.getElementById('error-fname').innerHTML=text;
       var elmnt = document.getElementById("feed_back");
       elmnt.scrollIntoView();
		   return false;  
	}else{
    document.getElementById('error-fname').innerHTML= '';
  }  
	if(email.indexOf('@') == -1 || email.length<6){
       text="Please Enter valid Email"
       document.getElementById('error-email').innerHTML=text;
       var elmnt = document.getElementById("feed_back");
       elmnt.scrollIntoView();
       return false;  
   }else{
    document.getElementById('error-email').innerHTML= '';
  } 

   if(feedback.length<1){
       text="Please Enter valid feedback type"
       document.getElementById('error-feedback').innerHTML=text;
       var elmnt = document.getElementById("feed_back");
       elmnt.scrollIntoView();
       return false;  
   }else{
    document.getElementById('error-feedback').innerHTML= '';
  } 

	if(package_type.length<1){
       text="Please Enter valid package type"
       document.getElementById('error-package_type').innerHTML=text;
       var elmnt = document.getElementById("feed_back");
       elmnt.scrollIntoView();
       return false;  
   } else{
    document.getElementById('error-package_type').innerHTML= '';
  } 

  document.getElementById("waterform").submit();

  }


</script>