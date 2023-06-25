<?php
include 'Connection.php';
if(isset($_POST['userid'] )&& isset($_POST['txtVal'])){
    $USERID = $_POST['userid'];
    $NEWDA = $_POST['txtVal'];

    $Sql2= "UPDATE `employeemaster` SET `DueAmount`='$NEWDA' WHERE `Id` = $USERID";
    $result = mysqli_query($conn,$Sql2);
    
    if($result)
    {

        $sts['msg']='success';
        $sts['succ']=true;
        echo json_encode($sts);
        // echo 'Data has been updated sucessfully';
    }
}



?>