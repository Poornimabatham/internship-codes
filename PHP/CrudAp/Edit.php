<?php


if(isset($_POST['hiddenData'])){
    $user_id = $_POST['hiddenData'];

    $updatename =$_POST['updatename'];
    $updateemail  =$_POST['Updateemail'];
 
 
      $updatepass= $_POST['updatepass'];
  $updatenum =  $_POST['Updatenum'];
      $updatedate=$_POST['updatedate'];
      $updatecountry = $_POST['Updatecountry'];     
      $updatecity = $_POST['Updatecity'];
      $Sql2 = "UPDATE `crud`  SET  `Name`='$updatename', `Email`='$updateemail', `Password`='$updatepass', `Mobile` = '$updatenum', `Date` ='$updatedate', `Country` ='$updatecountry', `City` ='$updatecity' WHERE `Id`  = '$user_id'";
      $result = mysqli_query($conn,$Sql2);
      if($result){
          echo 'Data has been updated sucessfully';
      }
    }


?>