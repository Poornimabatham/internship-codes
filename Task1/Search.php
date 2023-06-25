

<?php
include("Connection.php");
            if(isset($_POST['txtVal'])){

                $search = $_POST['txtVal'];
                // echo $search;
                // exit;
                $sql="SELECT * FROM `employeemaster` WHERE    LastName LIKE'%$search%'  ";

                // echo $sql;
                // exit;
                $result=mysqli_query($conn,$sql);

                // $result;
                // exit;
                    
                    $table='
                    <table class="table  border border-primary" >
                      <thead>
                        <th width="10%">Id</th>
                        <th width="10%">Name</th>
                    
                        
                  </thead>';
                  
                // echo $sql;
                // exit;
            //  echo $result;
            //  exit;
            
                    while($row= mysqli_fetch_assoc($result)){

                   $name= $row['LastName'];
                  //  echo $name;
                  //  exit;
                   $id=$row['Id'];
                   $Status=$row['Status'];

                  //  echo $id;
                  //  exit;
                    
                   $return="";
                      
                   if($row['Status']== 1)
                   {



                     $return="<button class='btn btn-primary' onclick=User(".$id.",".$Status.")><p>InActive</p></button>";
              //  
                   }
                   
                   else
                  {

                     $return="<button class='btn btn-danger' onclick=User(".$id.",".$Status.")><p>Active</p></button>
                     ";
                
                  }

                   $Status = $row['Status'];
                   $table.='<tr>

                        <td>'.$name.'</td>
                         <td>'.$return.'</td>
                    
                     
                   
                   
                 


                 </tr>';
                    } 
                    $table.='</table>';
echo $table;
            
                   }
            
                

            ?>






























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

                    

                     $return="<input class='switch' id='cheak' data-id='.$id.'   value=1 type='checkbox' checked>";
              //  
                   }
                   
                   else
                  {

                     $return="<input  class='switch' id='cheak' data-id=.$id.' value=0 type='checkbox'>

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
echo $last_programm_id;
exit;
    echo '<div class="alert alert-warning">data  inserted</div>';

     }
    }
}  


?>

    
    



    
    


