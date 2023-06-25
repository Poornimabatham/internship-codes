<?php





include 'Connection.php';

if(isset($_POST['state'])){


$Statedata = $_POST['state'];
// echo $Statedata;
// exit;

$sql3 = "SELECT * FROM `states` WHERE country_id = $Statedata";


$query=mysqli_query($conn,$sql3);
$row_Count = mysqli_num_rows($query);

?>

    
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);

        
                $State.="<option value=".$row['id'].">".$row['name']."</option>";

                echo $State;
}
}?>
