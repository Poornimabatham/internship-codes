<?php
include 'Connection.php';
// Import all the variables from include.php
extract($_POST);


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['number']) && isset($_POST['date'])&& isset($_POST['Country']) &&  isset($_POST['City']) ){
    
    if(empty($name) || empty($email) || empty($password) || empty($number) || empty($date) ||  empty($Country) || empty($City))
    {
    
        // // $current_date = date("Y-m-d H:i:s");
        echo 'insert data please first';
        // //  echo $sql;
              }
        else{ 
            $sql = "SELECT * FROM `crud` WHERE Email='$email'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) >0)
            {
              echo 'email already exist';
          
              
            }
            else
            {
                     
           $sql2 ="INSERT INTO `crud` (`Name`, `Email`, `Password`, `Mobile`, `Date`, `Country`, `City`)  VALUES ( '$name', '$email', '$password', '$number', '$date', '$Country', '$City')";

           if(mysqli_query($conn,$sql2)){
            
                echo 'done';
              }
              
          
            }
        }
        
       
  

  
$res = mysqli_query($conn,$sql);
 

}

?>
