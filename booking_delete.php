<?php 
$msg = '';
$error = '';
include('src/includes/config.php');

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM booking WHERE booking_id = $id"; 

if ($dbh->query($sql) === TRUE) {
  $msg="Booking Successful!!";
  header('Location: booking_list.php');
  exit;
} else {
  $error="Error deleting record";
}

$dbh->close();

?>