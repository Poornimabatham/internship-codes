<?php

include 'Connection.php';
if(isset($_POST['Send'])){
    $unique= $_POST['Send'];
    // echo $unique;
    // exit;
    $sql = "DELETE FROM `crud` WHERE Id = $unique";
    // echo $sql;
    // exit;
    $result = mysqli_query($conn,$sql);
    if($result){
        echo 'Data has been sucessfully';
    }
    
}



?>