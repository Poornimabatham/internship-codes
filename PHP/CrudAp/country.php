

<?php

if(isset($_POST['country'])){
// exit;
// $country = isset($_POST['country'])?$_POST['country']:'';
include 'Connection.php';
$country ='';
$sql2 =  "SELECT * FROM  `country_master`";


$query=mysqli_query($conn,$sql2);
$row_Count = mysqli_num_rows($query);

?>

    
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);


                 $country.="<option value=".$row['id'].">".$row['country_name']."</option>";
                


echo $country;
}
}?>


