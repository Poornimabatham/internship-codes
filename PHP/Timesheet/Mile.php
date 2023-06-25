
<?php

if(isset($_POST['Mile'])){
    $stone_id = $_POST['Mile'];
// exit;
// $country = isset($_POST['country'])?$_POST['country']:'';
include 'Connection.php';
$Project ='';
$sql2 = "SELECT * FROM `project` WHERE  Id = $stone_id"; 





$query=mysqli_query($conn,$sql2);
$row_Count = mysqli_num_rows($query);

?>

    
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);
 

$Name = $row['Name'];

    



               
    $Project.="<option value=".$row['ProjectId'].">".$Name."</option>";

        


echo $Milestone;
}
}?>


