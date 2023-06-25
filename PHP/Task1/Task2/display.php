


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


<?php
include 'connection.php';
                $sql="SELECT * FROM `employeemaster` WHERE    LastName LIKE'%$search%'  ";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  ?>
  <div class="container-fluid">
  <table class="table"  >
    <thead>
    
      <th width="10%">Name</th>
      
</thead>
  <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>


      <td><?php echo $row["Name"];?></td>

      <td>
        <?php
        if($row['Status']==1){
            echo '<p><a href="active.php?id='.$row['id'].'&Status=0">Active</a></p>'
        }
        else{
            echo '<p><a href="active.php?id='.$row['id'].'&Status=1">InActive</a></p>'

        }
        ?>

  </td>
    



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