<?php 
include 'index.php';
session_start();

?>

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
    <div class="container mt-3">
        <h1>Contact us for  your concerns</h1>
<form method="POST" action="#" id='s_form' enctype="multipart/form-data">





    <div class="form-group">
    <label for="name">Full name</label>
        <input class="form-control" type="text" name='fname' id="fname">
    </div>
 
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control"   type="email" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control"   type="password" name="password" id="password">
    </div>


    <div class="form-group">
        <label for="number">Number</label>
        <input class="form-control"   type="number" name="number" id="number">
    </div>

    <div class="form-group">
        <label for="number">Date</label>
        <input class="form-control"  type="datetime-local" name="date" id="number">
    </div>

    <div class="form-group">
        <label for="">Gender</label>
    <input type="radio"  name="g" value="female" />
<label for="contact_email">female</label>

<input type="radio"  name="g" value="Male" />
<label for="contact_phone">Male</label>
    </div>


    <div class="form-group">
        <label for="">Position</label>
        <select name="position">
	
	<option value="Jr.Developer">Jr. Developer</option>
	<option value="Intern">Intern</option>
	<option value="Sr.Developer">Sr. Developer</option>
    <option value="Manager"> Manager</option>
</select>

</div>
<div class="form-group">
    <input type="file" name="image">

</div>
<?php
include 'Connection.php';
$sql2 =  "SELECT * FROM  `country_master`";


$query=mysqli_query($conn,$sql2);
$row_Count = mysqli_num_rows($query);

?>
<label for="country">Country</label>
<select name="country" id="Country">
    
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);

        ?>
                <option value=<?php echo $row['id'];?>><?php echo $row['country_name'];?></option>

<?php
}?>
       </select>






       
    

        <input type="submit"  name ="Submit"></input>
        
    </form>

    
</body>
</html>




<?php


include "index.php";
 if(isset($_POST['Submit']))
 
   {

    // echo"<pre>";
    // echo print_r($_FILES);
    // exit;
         // echo "data exist";
$Myname = $_POST['fname'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Mobile  = $_POST['number'];
$date = $_POST['date'];
$Check = $_POST['g'];
$Position = $_POST['position'];
$Pic = $_FILES['image']['name'];
$country = $_POST['country'];
$City = $_POST['City'];

if(empty($Myname) || empty($Email) || empty($Password) || empty($Mobile) || empty($date)|| empty($Check) || empty($Position) || empty($Pic) || empty($country) || empty($City))  {
    echo '<script>alert("insert data please first")</script>';
// //  echo $sql;
      }
else{
    $sql = "SELECT * FROM `form` WHERE Email='$Email'";
    echo $sql;

    
    
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) >0){
  echo '<script>alert("email already exist")</script>';

  
}else{
  
  $think='';
  if(!empty($_FILES['image']['name']))

  {

      $path = $_FILES["image"]["name"];

      $ext = pathinfo($path,PATHINFO_EXTENSION);

 

      if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')

      {

       move_uploaded_file($_FILES["image"]['tmp_name'],'New/'.$_FILES["image"]['name'].'');



       $think = 'New/'.$path;



      }

      else

      {

          echo "invalid format";

          exit;

      }

  }

  $sql = "INSERT INTO  `form` (`Name`, `Email`,`Password`,`Mobile`,`Date-time`,`Radio`,`Position`,`PIC` ,`Country` ,`City`) VALUES('$Myname','$Email','$Password','$Mobile','$date','$Check','$Position','$think','$country')";

  // echo 'Saved!';
  
//   
if(mysqli_query($conn,$sql)){

      $_SESSION['user_name'] = $Myname;

    header("location:Fetch.php");
    // echo "done";
  }
  
  // header("location:Fetch.php");

}

}












    
}
    



   
 

?>




























<?php
include 'Connection.php';
$sql3 =  "SELECT * FROM  `SELECT * FROM `city_master``";


$query=mysqli_query($conn,$sql3);
$row_Count = mysqli_num_rows($query);

?>
<label for="City">City</label>
<select name="City" id="City">
    
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);

        ?>
                <option value=<?php echo $row['id'];?>><?php echo $row['city_name'];?></option>

<?php
}?>
       </select>






<script>

//         let form = document.querySelector("form");
//         form.addEventListener("submit",(e)=>{
//             e.preventDefault();
//             let name  = document.querySelector("#fname").value;
//             let email = document.querySelector("#email").value;
        
//             let Password = document.querySelector("#password").value;
//             let Number = document.qu
            
// // alert(name);
//             if(name == "" ){

//                 alert("empty field");

//             }
//             else{
//                 // console.log(name)

//                 document.getElementById('s_form').submit();
//             }
             
//         })
    // </script> 