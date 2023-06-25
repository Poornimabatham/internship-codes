
<?php
include 'Connection.php';
if(isset($_POST['status']) && isset($_POST['id'])){
    $id=  $_POST['id'];


$status =  $_POST['status'];

if($status == 1)
{
    mysqli_query($conn,"UPDATE `employeemaster` SET `Status` = 0 WHERE id = $id");
}
else
{
    mysqli_query($conn,"UPDATE `employeemaster` SET `Status` = 1 WHERE id = $id");
}

echo true;
// header('location:EmployeePage.php');
}
?> 


$id=$id;
$status  = 0;
if($status ==0){
    $status =1
}
else if($status==1){
    $status ==0
    
}
else{
    
}