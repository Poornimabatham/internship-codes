<?php
include 'connection.php';
extract($_POST);
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    if (empty($name) || empty($email)  || empty($number)) {
      echo '<div class="alert alert-success">please fill all required field</div>';
  } else {
    $sql1 =  "INSERT INTO `ubi`( `name`, `email`, `phone`) VALUES ('$name','$email','')";

      if ($res = mysqli_query($conn, $sql1)) {
          echo '<div class="alert alert-success">data successfully inserted</div>';
      } else {
          echo '<div class="alert alert-warning">data not inserted</div>';
      }
  }



}


?>