<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form  class='form-inline'action="" method="POST">
        <div class="container">
    
      <input class='form-control mt-5' type="text"placeholder='Search item' name='search'>
   
    

  <input class='btn btn-warning ml-2 mt-5' type="submit"name='submit'>

  </div>
</form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  






<?php
include("Connection.php");
            if(isset($_POST['submit'])){

                $search = $_POST['search'];
            
                $sql="SELECT * FROM `employeemaster` WHERE    LastName LIKE'%$search%'  ";
                // echo $sql;
                // exit;
                $result=mysqli_query($conn,$sql);
            //  echo $result;
            //  exit;
                if($result){
                   if(mysqli_num_rows($result)>0){
                    
                     echo"<table class='table table-hover'>";
                     echo"<tr>
                     <th>Firstname</th>
                     <th>Status</th>
                     </tr>";
            
                    while($row= mysqli_fetch_assoc($result)){
                   
                     echo"<tr>";
                     echo"<td>".$row['LastName']."</td>";

                    //  if($row['Status'] == 1)
                    //  {
                    //     // $string = "Active";
                    //     echo '<p> <a href="active.php?id='.$row['id'].'&Status=0">InActive</p>';
                  
                    //  }
                    //  else
                    // {
                    //   echo '<p> <a href="active.php?id='.$row['id'].'&Status=1">Active</p>';
                  
                    // }
?>
                    <td>
                      <?php
                    if($row['Status'] == 1)
                    {
                       // $string = "Active";
                       echo '<p> <a href="active.php?id='.$row['id'].'&Status=0">InActive</p>';
                 
                    }
                    else
                   {
                     echo '<p> <a href="active.php?id='.$row['id'].'&Status=1">Active</p>';
                 
                   }
                   ?>
                   </td>
                   <?php

                     echo"</tr>";
                     echo"</tbody>";
                    } 
            
                   }else{
                    echo"<h2>DATA NOT FOUND</h2>";
                   }
                }
            }
            
            
            ?>


<!-- SELECT Email FROM form WHERE  Email = $row['Email]'; -->







</body>
</html>

