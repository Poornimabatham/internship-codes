<?php

include 'Connection.php';

if(isset($_POST['displaySend'])){
    $table='
    <table class="table  border border-primary" >
      <thead>
        <th width="10%">Id</th>
        <th width="10%">Name</th>
        <th width="10%">Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th width="10%">Date</th>
        <th>Country</th>
        <th>City</th>
        
  </thead>';
  

  $select = "SELECT  * FROM `crud` INNER JOIN `country_master` ON `crud`.`Country`=`country_master`.id 
 INNER JOIN city_master ON `crud`.`City`=city_master.id";
 
  // $select = "SELECT *,crud.Country,country_master.country_name FROM `crud` INNER JOIN `country_master` ON `crud`.`Country`=`country_master`.id " ;

  // $sql = "SELECT * FROM `crud`";
  
 $result = mysqli_query($conn,$select);

 while($row=mysqli_fetch_assoc($result)){
    $id = $row['Id'];
    $name= $row['Name'];
    
    $email= $row['Email'];
    $Password = $row['Password'];
    $mobile =  $row['Mobile'];
     $date = date('d/M/y ',strtotime($row["Date"]));

    $Country = $row['country_name'];
    $City = $row['city_name'];



    $table.='<tr>

    <td>'.$id.'</td>

      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$Password.'</td>

      <td>'.$mobile.'</td>

      <td>'.$date.'</td>

      <td>'.$Country.'</td>
      <td>'.$City.'</td>
      <td>
      <button class="btn btn-primary" onclick="UserDetails('.$id.')">Update</button>
      <button class="btn btn-dark" onclick="User('.$id.')">Delete</button>

      </td>
    </tr>';
}
$table.='</table>';
echo $table;
}

?>










