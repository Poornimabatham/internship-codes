



<?php


include 'Connection.php';

if(isset($_POST['citydata'])){


$countrydata = $_POST['citydata'];
// echo $countrydata;
// exit;


 
$sql3 ="SELECT * FROM `city_master` WHERE country_id = $countrydata";


$query=mysqli_query($conn,$sql3);
$row_Count = mysqli_num_rows($query);

?>

    
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);

        
                $city.="<option value=".$row['id'].">".$row['city_name']."</option>";

                echo $city;
}
}?>