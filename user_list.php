<!-- source code:www.w3schools.com -->

<?php include('src/includes/header.php'); ?>
<?php 
$msg = '';
$error = '';
include('src/includes/config.php');

$stmt =  $dbh->prepare("SELECT * FROM user");
$stmt->execute();

$result = $stmt->get_result();

$user_list = $result->fetch_all();

?>

<link rel="stylesheet" type="text/css" href="src/styles/booking_list.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="registration" class="content">

<div class="row">
<div class="col-75">
<h2>Users</h2>
</div>
</div>

<div class="row" style="margin-bottom:20px;">
  <div class="col-75">
    <div class="container">
    <table>
  <tr>
    <th>User ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Password</th>
    <th>City</th>
    <th>Actions</th>
  </tr>
  <?php foreach($user_list as $u){?>
  <tr>
    <td><?php echo $u[0]; ?></td>
    <td><?php echo $u[1]; ?></td>
    <td><?php echo $u[2]; ?></td>
    <td><?php echo $u[3]; ?></td>
    <td><?php echo $u[4]; ?></td>
    <td><?php echo $u[5]; ?></td>
    <td><?php echo $u[6]; ?></td>
    <td><?php echo $u[7]; ?></td>
    <td><?php echo $u[8]; ?></td>
    <td><a class="button" href='user_delete.php?id=<?php echo $u[0]; ?>'>Delete</a><a class="button-edit" href='user_edit.php?id=<?php echo $u[0]; ?>'>Edit</a></td>
  </tr>
  <?php } ?>
  
</table>
    </div>  
</div>

</div>

<?php include('src/includes/footer.php'); ?>
<script type="text/javascript">
  
  function deleteUser(user_id){
     
  }
</script>  

