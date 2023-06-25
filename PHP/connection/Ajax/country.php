

<?php

// exit;
if(isset($_POST['country'])){

include 'connection.php';
$country ='';
$sql2 =  "SELECT * FROM  `country_master`";




$result = $conn->query($sql2);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

                 $country.="<option value=".$row['id'].">".$row['id']." ".$row['country_name']."</option>";
  }


echo $country;








}
}
?>

   


