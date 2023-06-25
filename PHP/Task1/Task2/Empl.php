<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud App </title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- Button trigger modal -->



    <form method="POST" action="#" id='s_form' enctype="multipart/form-data">
  
<input type="text" id="textfield">
<input type="submit"  name ="Submit"></input>

</form>









<!-- ?php
session_start();
echo "welecome".$_SESSION['user_name'];

if(!isset($_SESSION['user_name'])){
  echo "you are log out";
   header('location:Login.php');
}

?> -->



<?php
include 'connection.php';
if($_POST['submit'])
{
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


      <td><?php echo $row["LastName"];?></td>

      <td>
        <?php
        if($row['Status']==1){
            echo '<p><a href="Active.php?id='.$row['id'].'&Status=0">Active</a></p>';
        }
        else{
            echo '<p><a href="Active.php?id='.$row['id'].'&Status=1">InActive</a></p>';

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
 

}

    ?>

























<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script>
</script>
</body>
</html>