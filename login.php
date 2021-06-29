<!--https://www.youtube.com/watch?v=-RbkNcDwKbc&feature=youtu.be-->
<?php include('src/includes/header.php'); ?>
<?php 
include('src/includes/config.php');

$msg = '';
$error = '';
if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
{

 $email=$_POST['email'];
 $password=$_POST['password'];

 //$sql="SELECT * FROM user WHERE email= '$email' AND password = '$password'";
 $stmt =  $dbh->prepare("SELECT * FROM user WHERE email= ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

$result = $stmt->get_result();

// $result = $dbh->query($sql);

if (mysqli_num_rows($result)) {
    $row = $result->fetch_row();
    $msg="Login Success";
    $_SESSION['user'] = $row;
    header("Location: http://localhost/boatsafari/profile.php", true, 301);
    exit();
    
  
  } else {
    $error="Invalid email or password";
  }
  
  $dbh->close();

}
?>

<link rel="stylesheet" type="text/css" href="src/styles/login.css">


<div id="login" class="content">
<div class = "login-box">
     <img src = "src/images/profile.png" alt = "profile picture" class = "profile"> 
        
            <h2>Login</h2>
            <h5>Enter your details below to continue</h5>
            <?php if($msg){ ?><span style="color: green;"><?php echo $msg; ?></span><?php } else if($error){ ?> <span style="color: red;"><?php echo $error; ?></span> <?php } ?>
            <form id="login_form" name="myForm" method="post" onsubmit="event.preventDefault();  validateForm()"> 
              
            <p>Email</p>
            <input type="email" name = "email" placeholder="Enter Email" id="email">
            <p>Password</p>
            <input type="password" name = "password" placeholder="Enter password" id="password">       
            <input type="submit" name = "submitbtn" value="log In">
           
            </form>
       </div>   

</div>
       

       
       <?php include('src/includes/footer.php'); ?>
     
       <script  type="text/javascript">

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
//form validation
function validateForm() {
  
  var email = document.forms["myForm"]["email"].value;
  var password = document.forms["myForm"]["password"].value;


  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }

  document.getElementById("login_form").submit();

}
       </script>  