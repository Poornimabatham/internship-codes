<?php
session_start();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3">
        <h1>Contact us for  your concerns</h1>
<form method="POST" action="#" id='s_form' enctype="multipart/form-data">
    
 
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control"   type="email" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control"   type="password" name="password" id="password">
    </div>


    <button type="submit"  class="btn btn-primary" name="Login">Login</button>
</form>
</body>
</html>


<?php

include "index.php";
if(isset($_POST['Login'])){
    $Username = $_POST['email'];
    $Password = $_POST['password'];
    // echo $Username;
    // echo $Password;
    $query = "SELECT * FROM `form` WHERE  Email = '$Username'  && Password = '$Password'";


     
// echo $query;
// exit;
    $result = mysqli_query($conn,$query);
    
     $total = mysqli_num_rows($result);
    //  echo $total;
    //  exit;
    if($total == 1){
        // echo "login ok";
$_SESSION['user_name'] = $Username;
        header('location:Fetch.php');
    }
    else{
        echo "login failed";
    }

}


?>