

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title></title>
    <style>
         .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
          background-color:green;
        }

        .switch input { 
          opacity: 0;
          width: 30px;
          height: 20px;
        }

        
        
        
    </style>

        
      
    </style>
    </head>
  <body>
<!-- DISPLAY FOR PROGRAMM  -->
<?php
session_start();
include 'connection.php';

if(isset($_POST['displaySend'])){
    $table='
    <table class="table table-striped text-center">

<tr>
    <th> Programm Id</th>
    <th>Programme Name</th>
    <th>Create Date</th>

    <th>Status</th>
    <th>Action</th>
</tr>';

  $select = "SELECT * FROM `programs`
  ";
 
 
  
 $result = mysqli_query($conn,$select);

 while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name= $row['program_Name'];
    
    // $Cd= $row['created_Date'];
    // $Md = $row['modified_Date'];
    // $Md = date('d/M/y ',strtotime($row["'modified_Date'"]));
     $date = date('d/M/y ',strtotime($row["created_Date"]));

$status = $row['status'];

$return="";


                   if($row['status']== 1)
                   {

                    

                     $return= "<button  class='btn btn-primary text-white'  id='cheak' data-id='.$id.'   value=1 type='radio' checked>Active</button>";
                   }
                   
                   else
                  {

                     $return="<button button class='btn btn-danger text-white' ' id='cheak' data-offstyle='danger' data-id=.$id.' value=0 type='radio'>Inactive</button>

                     ";
                
                  }
                  
                  
    $table.='<tr>

    <td>'.$id.'</td>

      <td>'.$name.'</td>
      <td>'.$date.'</td>
      <td>'.$return.'</td>
      <td>
      
      <button class="btn btn-primary" onclick=UserDetails('.$id.','.$status.')>Update</button>
      <button class="btn btn-dark" onclick="User('.$id.')">Delete</button>

      </td>
    </tr>';
}
$table.='</table>';
echo $table;
}

?>







<!-- DISPLAY FOR PROGRAMM  -->


<!-- INSERT FOR PROGRMMM -->


<?php
include 'connection.php';
if(isset($_POST['name'])){

  $Name = $_POST['name'];
  $date = date('Y-m-d H:i:s');

  $status = 1;
   $sql1 = "SELECT  * FROM  `programs`   WHERE `program_Name` = '$Name'";
   $result = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result) >0)
    {

echo '<div class="alert alert-warning">Programm Name already exist</div>';

      // echo 'Programm Name already exist';
  exit;
      
    }
    else{

      $last_id = $_SESSION['organization_Id'];
  
   $sql2 = "INSERT INTO   `programs` ( `program_Name` ,`created_Date`, `organization_Id`,`status`)  VALUES ( '$Name', '$date','$last_id',

  '$status')";

  if(mysqli_query($conn,$sql2)){
   
     $last_programm_id = mysqli_insert_id($conn);
// echo $last_programm_id;
// exit;
    echo '<div class="alert alert-warning">data  inserted</div>';

     }
    }
}  


?>

    
    



    
</body>
</html>
    


