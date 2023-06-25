
<?php
include "connection.php";

if(isset($_POST['pay']))
{   
    $id=$_POST['id'];
    $due=$_POST['due'];
    $paid=$_POST['paid'];
    $paidamount=$_POST['paidamount'];
    
    if($paidamount>$due || $paidamount==0 || $paidamount<-1)
    {
        echo "pelease fill valid amount to be paid";
    }
    else
    { $paid=$paid+$paidamount;
        $due=$due-$paidamount;
     $q="UPDATE employeemaster
    SET PaidAmount=$paid, DueAmount=$due
    WHERE id=$id";
    // echo $q;
    $result=mysqli_query($conn,$q);
  }
}


?>