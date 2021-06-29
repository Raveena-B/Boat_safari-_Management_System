<!-- source code:www.w3schools.com-->

<?php include('src/includes/header.php'); ?>
<?php 
$msg = '';
$error = '';
include('src/includes/config.php');

$stmt =  $dbh->prepare("SELECT * FROM contact");
$stmt->execute();

$result = $stmt->get_result();

$contactus_list = $result->fetch_all();

?>

<link rel="stylesheet" type="text/css" href="src/styles/booking_list.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="contactus" class="content">

<div class="row">
<div class="col-75">
<h2>Contact Us</h2>
</div>
</div>

<div class="row" style="margin-bottom:20px;">
  <div class="col-75">
    <div class="container">
    <table>
  <tr>
    <th>Contact ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Actions</th>
  </tr>
  <?php foreach($contactus_list as $c){?>
  <tr>
    <td><?php echo $c[0]; ?></td>
    <td><?php echo $c[1]; ?></td>
    <td><?php echo $c[2]; ?></td>
    <td><?php echo $c[3]; ?></td>
    <td><?php echo $c[4]; ?></td>
    <td><?php echo $c[5]; ?></td>
 
    <td><a class="button" href='contactus_delete.php?id=<?php echo $c[0]; ?>'>Delete</a><a class="button-edit" href='contactus_edit.php?id=<?php echo $c[0]; ?>'>Edit</a></td>
    
  </tr>
  <?php } ?>
  
</table>
    </div>  
</div>

</div>
<script type="text/javascript" src="src/js/book_now.js"></script>
<?php include('src/includes/footer.php'); ?>
<script type="text/javascript">
  
  function deleteContactus(contactus_id){
     
  }
</script>  

