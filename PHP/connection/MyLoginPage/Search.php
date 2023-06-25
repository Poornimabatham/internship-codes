<?php include("index.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>search_data</title>
</head>
<body>


<div class="container">
    <form  class='form-inline'action="" method="POST">
      <input class='form-control mt-5' type="text"placeholder='Search item'name='search'>
      <input class='btn btn-warning ml-2 mt-5' type="submit"name='submit'>
    </form>
   
    <br><br>
</div>
</body>
</html>

<?php
            if(isset($_POST['submit'])){

                $search = $_POST['search'];
            
                $sql="Select * from `form` where ID like'%$search%' or Firstname like'%$search%' or lastname like'%$search%'   ";
                $result=mysqli_query($conn,$sql);
            
                if($result){
                   if(mysqli_num_rows($result)>0){
                     echo"<table class='table table-hover'>";
                     echo"<tr>
                     <th>Id</th>
                     <th>Firstname</th>
                     <th>lastname</th>
                     </tr>";
            
                    while($row= mysqli_fetch_assoc($result)){;
                     echo"<tr>";
                     echo"<td>".$row['ID']."</td>";
                     echo"<td>".$row['Name']."</td>";
                     echo"<td>".$row['lastname']."</td>";
                     echo"<td><a href='edit.php/?id=".$row['ID']."'>edit</a>"."</td>";
                     echo"</tr>";
                     echo"</tbody>";
                    } 
            
                   }else{
                    echo"<h2>DATA NOT FOUND</h2>";
                   }
                }
            } else{
                echo"please enter data";
            }
            
            
            ?>