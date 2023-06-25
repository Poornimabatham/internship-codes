


<!-- ?php
session_start();
echo "welecome".$_SESSION['user_name'];

if(!isset($_SESSION['user_name'])){
  echo "you are log out";
   header('location:Login.php');
}

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <button class="btn btn-primary"><a href="Logout.php">Logout</a></button>


<?php
include 'index.php';

// $select = "SELECT *,form.Country,country_name FROM `form` INNER JOIN `country_master` ON `form`.`Country`=`country_master`.id";
//  $select = "SELECT *,form.Country,country_master.country_name FROM `form` INNER JOIN `country_master` ON `form`.`Country`=`country_master`.id";

//  SELECT * FROM form INNER JOIN country_master ON form.id = country_master.id INNER JOIN country_master ON city_master.id = form.id;

$result = $conn->query($select);

if ($result->num_rows > 0) {
  ?>
  <div class="container-fluid">
  <table class="table"  >
    <thead>
      <th width="10%">Id</th>
      <th width="10%">Name</th>
      <th width="10%">Email</th>
      <th>Password</th>
      <th>Mobile</th>
      <th width="10%">Date</th>
      <th>Gender</th>
      <th>Position</th>
      <th>Image</th>
      <th>Country</th>
      <th>City</th>
</thead>
  <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th><?php echo $row["ID"];?></th>

      <th><?php echo $row["Name"];?></th>

      <th><?php echo $row["Email"];?></th>
      <th><?php echo $row["Password"];?></th>
      <th><?php echo $row["Mobile"]; ?></th>
      <th><?php echo date('d/M/y ',strtotime($row["Date-time"]))?></th>
      <th><?php echo $row["Radio"];?></th>
      <th><?php echo $row["Position"];?></th>
      <th><img src="../connection/New/<?php echo $row["PIC"];?>" alt="" width="100px" height="200px"></th>
      <th><?php echo $row['country_name'];?></th>
      <th><?php echo  $row['city_name'];?></th>
      <th class="btn btn-primary" ><a href ="Update.php/?updateid=<?=$row["ID"]?>" class="text-white">Edit</a></th>
      <th class="btn btn-primary"><a href="delete.php/?del=<?=$row["ID"]?>" class="text-white">delete</a></th>


    
    <!-- // $row["ID"]. " - Name: " . $row["Name"]. " Email " . $row["Email"]. "Date" . date('d-M-y',strtotime($row["Date-time"])). "<br>"; -->
  </tr>
  </div>
  <?php
  }
} else {
  echo "0 results";
}

    // header("location: MyPage.php");
 



    ?>




















    </body>
   


</html>