<?php

echo "<pre>";
 print_r($_POST);
 
include "index.php";
if(isset($_POST['Search'])){
    $Search =  $_POST['fname'];
    $sql = "SELECT * FROM `Form` WHERE `Email` LIKE = '%$Search%' ";
    $query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
//   echo  mysqli_num_rows($query);
echo  Email;
}
else{
    echo "no records";
}


}
else{
    echo "no post data";
}

?>