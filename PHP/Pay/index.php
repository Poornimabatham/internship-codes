<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>



<?php
include("database.php");

if(isset($_POST['search'])){
$searchbox = $_POST['searchbox'];
$search = $_POST['search'];


    $sql="SELECT * FROM employeemaster WHERE FirstName like '%$searchbox%' ";
    $q= mysqli_query($conn,$sql);
?>
    <table border="2">
    <tr>
    <th>FirstName</th>
    <th>Action</th>
    </tr>   
<?php
    while($row=mysqli_fetch_array($q))
    {  

      $id= $row['Id'];
    ?> 
   <tr>
  <td name="name" id="name" ><?php echo $row['FirstName']; ?></td>
  <td><button type="button"  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal" data-id="$row['id']">
   Delete
</button></td>
<?php
}
?>

<?php
}
?>

<?php

if(isset($_POST['id'])){
    $userid= $_POST['id'];
    $del= "DELETE FROM employeemaster WHERE id='$userid'";
    $q= mysqli_query($conn,$sql);
}

?>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       Are you sure you want to delete employee?
      </div>

      <div class="">
        <button class="btn btn-danger" id="del" name="del"  data-id="$row['id']" onclick="">Yes</button>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">close</button>
      </div>

    </div>
  </div>
</div>

  
</body>
</html>
onclick=User(".$id.",".$Status.")
<button class="btn btn-primary" onclick="UserDetails('.$id.')">Update</button>