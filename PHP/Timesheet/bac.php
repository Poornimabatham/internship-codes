

<?php

if(isset($_POST['country'])){
// exit;
// $country = isset($_POST['country'])?$_POST['country']:'';
include 'Connection.php';
$country ='';
$sql2 =  "SELECT * FROM `employeemaster`
";


$query=mysqli_query($conn,$sql2);
$row_Count = mysqli_num_rows($query);

?>

    
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);

    $ar=  $row['FirstName'];
    $av= $row['LastName'];


                 $country.="<option value=".$row['Id'].">".$ar." ".$av."</option>";
                


echo $country;
}
}?> 


<?php

if(isset($_POST['Project'])){
// exit;
// $country = isset($_POST['country'])?$_POST['country']:'';
include 'Connection.php';
$Project ='';
$sql2 = "SELECT * FROM `project`

";
// echo $sql2;
// exit;


$query=mysqli_query($conn,$sql2);
$row_Count = mysqli_num_rows($query);

?>

    
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);

    $Name=  $row['Name'];
    


                 $Project.="<option value=".$row['Id'].">".$Name."</option>";
                


echo $Project;
}
}?>










<?php
include 'Connection.php';
extract($_POST);
if(isset($_POST['name']) && isset($_POST['Project']) && isset($_POST['Milestone']) && isset($_POST['Task']) && isset($_POST['Date'])&& isset($_POST['Time']) &&  isset($_POST['Desc']) ){
   
  if(empty($name) || empty($Project) || empty($Milestone) || empty($Task) || empty($Date) ||  empty($Time) || empty($Desc))
{
 echo 'please fill the details';
}
  // $Name = $_POST['name'];
else{
 
  $sql1 = "SELECT * FROM  `timesheet` WHERE `Empid` = $name ";

  $result = mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result)>0){
    echo 'User already exit';

  }
        
  
  else{
     $sql2 = "INSERT INTO `timesheet`( `ProjectId`, `MilestoneId`, `TaskName`, `LoggedHours`, `TimesheetDate`, `Description`, `Empid`) VALUES
      ('$Project','$Milestone','$Task','$Time','$Date','$Desc','$name')";
     
          
          //  echo $sql2;
          //  exit;
       if(mysqli_query($conn,$sql2)){
        
            echo 'done';
          }
          
        }
             
  }
    


      
    

    }
?>


