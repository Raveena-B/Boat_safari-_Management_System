<!-- source code:https://www.w3schools.com -->

<?php include('src/includes/header.php'); ?>
<?php 
$msg = '';
$error = '';
include('src/includes/config.php');

$stmt =  $dbh->prepare("SELECT * FROM feedback");
$stmt->execute();

$result = $stmt->get_result();

$feedback_list = $result->fetch_all();

?>

<link rel="stylesheet" type="text/css" href="src/styles/booking_list.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="feed_back" class="content">

<div class="row">
<div class="col-75">
<h2>Feedbacks</h2>
</div>
</div>

<div class="row" style="margin-bottom:20px;">
  <div class="col-75">
    <div class="container">
    <table>
  <tr>
    <th>Feedback_id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Package type</th>
    <th>Feedback type</th>
    <th>Comment</th>
    <th>Actions</th>
  </tr>
  <?php foreach($feedback_list as $f){?>
  <tr>
    <td><?php echo $f[0]; ?></td>
    <td><?php echo $f[1]; ?></td>
    <td><?php echo $f[2]; ?></td>
    <td><?php echo $f[3]; ?></td>
    <td><?php echo $f[4]; ?></td>
    <td><?php echo $f[5]; ?></td>
    <td><a class="button" href='feedback_delete.php?id=<?php echo $f[0]; ?>'>Delete</a></td>
  </tr>
  <?php } ?>
  
</table>
    </div>  
</div>

</div>
<script type="text/javascript" src="src/js/book_now.js"></script>
<?php include('src/includes/footer.php'); ?>
<script type="text/javascript">
  
  function deleteFeedback(feedback_id){
     
  }
</script>  
