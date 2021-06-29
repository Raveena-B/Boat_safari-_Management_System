<!-- source code:https://www.w3schools.com/howto/howto_css_checkout_form.asp -->

<?php include('src/includes/header.php'); ?>
<?php 
$msg = '';
$error = '';
include('src/includes/config.php');

$stmt =  $dbh->prepare("SELECT * FROM booking");
$stmt->execute();

$result = $stmt->get_result();

$booking_list = $result->fetch_all();

?>

<link rel="stylesheet" type="text/css" href="src/styles/booking_list.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="book_now" class="content">

<div class="row">
<div class="col-75">
<h2>Bookings</h2>
</div>
</div>

<div class="row" style="margin-bottom:20px;">
  <div class="col-75">
    <div class="container">
    <table>
  <tr>
    <th>Booking ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>City</th>
    <th>Actions</th>
  </tr>
  <?php foreach($booking_list as $b){?>
  <tr>
    <td><?php echo $b[0]; ?></td>
    <td><?php echo $b[1]; ?></td>
    <td><?php echo $b[2]; ?></td>
    <td><?php echo $b[3]; ?></td>
    <td><?php echo $b[4]; ?></td>
    <td><a class="button" href='booking_delete.php?id=<?php echo $b[0]; ?>'>Delete</a><a class="button-edit" href='booking_edit.php?id=<?php echo $b[0]; ?>'>Edit</a></td>
    
  </tr>
  <?php } ?>
  
</table>
    </div>  
</div>

</div>

<?php include('src/includes/footer.php'); ?>
<script type="text/javascript">
  
  function deleteBooking(booking_id){
     
  }
</script>  

