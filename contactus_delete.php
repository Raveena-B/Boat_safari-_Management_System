<?php 
$msg = '';
$error = '';
include('src/includes/config.php');

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM contact WHERE contact_id = $id"; 

if ($dbh->query($sql) === TRUE) {
  $msg="Delete Successful!!";
  header('Location: contactus_list.php');
  exit;
} else {
  $error="Error deleting record";
}

$dbh->close();

?>