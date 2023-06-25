


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <button class="btn btn-primary my-5"><a href="Form.php">Add User here</a></button>

<?php

// include 'index.php';
// include 'index.php';
// include 'index.php';



// include_once('index.php');
// include_once('index.php');
// include_once('index.php');

// require "index.php";
// require "index.php";
// require "index.php";

// require_once ("index.php");
// require_once ("index.php");
//  print_r($_POST);

// echo "<pre>";
// print_r($_FILES);
// exit;

// $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

// print_r($ext);
// exit;

// if(move_uploaded_file($_FILES["image"]["tmp_name"],'../myimage/'.$_FILES["image"]["name"].''))
// {
//   echo "dne";
  
//   // print_r(pathinfo("../myimage/pic1.JPEG"));
//   $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
//   print_r($ext);
  


// }
// else{
//   echo "not ok";
// }

// exit;
// echo "<pre>";

// print_r($_POST);

include "index.php";
 if(isset($_POST['Submit']))
   {

      // echo "data exist";
$Myname = $_POST['fname'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Mobile  = $_POST['number'];
$date = $_POST['date'];
$Check = $_POST['g'];
$Position = $_POST['position'];
$Pic = $_FILES['image']['name'];
// print_r($pic);
// exit;
      if(empty($Myname) || empty($Email) || empty($Password) || empty($Mobile) || empty($date)|| empty($Check) || empty($Position) ){
    
// // $current_date = date("Y-m-d H:i:s");
echo "insert data please first";
// //  echo $sql;
      }
else{
  $sql = "INSERT INTO  `form` (`Name`, `Email`,`Password`,`Mobile`,`Date-time`,`Radio`,`Position`,`PIC`) VALUES('$Myname','$Email','$Password','$Mobile','$date','$Check','$Position','$Pic'
  )";
  if(mysqli_query($conn,$sql)){
    move_uploaded_file($_FILES["image"]["tmp_name"],"New/".$_FILES["image"]['name']);{

      header("location:Fetch.php");
      // echo "done";
    }
    
    // header("location:Fetch.php");

  }

    
 
 else{
    echo "error". $sql."" .mysqli_error($link);
 }
}
 
}
 

   
 else{
  //  echo "no post data match";
 }

?>

  
</body>
</html>
