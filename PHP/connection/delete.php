<?php
include "index.php";

if(isset($_GET['del'])){
    $id = $_GET['del'];

    $sql1= "SELECT * FROM `form` WHERE ID = {$id}";
    $result  = mysqli_query($conn,$sql1) or die("Query failed : select");
    $row  = mysqli_fetch_assoc($result);

    // echo "<pre>";
    // print_r($row);
    // exit;

// Delete file from folder
    unlink("New/".$row['PIC']);
    $sql2 = "DELETE FROM  `form` WHERE ID = $id";
    // echo $sql;
    // exit;
    $result = mysqli_query($conn,$sql2);
    // echo $result;
    // exit;
    if($result){
//         // echo "deleteed successfully";
        header("location:../Fetch.php");
    }
    else{
//         echo "not deleted";
    }
}
else{
//     // echo "not";
}



?>