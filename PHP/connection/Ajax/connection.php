<?php
error_reporting(0);
// Create connection
$conn = mysqli_connect('localhost','root','','mydatabase');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>



