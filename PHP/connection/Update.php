
<?php
include 'index.php';
$id = $_GET['updateid'];
// echo $id;
// exit;


$sql = "SELECT * FROM `form` WHERE ID = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
// $Myname = $row["Name"];

// $Email = $row['Email'];
// $Password = $row["Password"];
// $Mobile  = $row['Mobile'];
$date = date('d-M-y',strtotime($row["Date-time"]));
// echo $date;
// exit;

// $date = $row["Date-time"];
// $Check = $row['Radio'];
// $Position = $row['Position'];
// echo $date;
// exit;
     


if(isset($_POST['Submit'])){


// echo "<pre>";
// print_r($_FILES);
// exit;

    $Myname = $_POST['fname'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Mobile  = $_POST['number'];
    $date = $_POST['date'];
    $Check = $_POST['g'];
    $Position = $_POST['position'];
    $image = $_POST['PIC'];
 


    $path = $_FILES["file"]["name"];
    
    
    if(move_uploaded_file($_FILES["file"]['tmp_name'],'New/'.$_FILES["file"]['name'].''))
    {
        echo 'done';
    }

     
       $sql1 = "UPDATE `form` SET `ID` = '$id' ,`Name`='$Myname',`Email`='$Email',`Password`='$Password',`Mobile`='$Mobile',`Date-time`='$date',`Radio`='$Check',`Position`='$Position' ,`PIC`= '$path' WHERE `ID` = '$id'";

    //    
       if(mysqli_query($conn,$sql1)){
        //  echo "updated successfuulyy";
         header("location:../Fetch.php");
    }
    else{
        echo "error". $sql."" .mysqli_error($link);
     }
    }
    
    
 
    
    
      
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


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
         
<form method="POST"  id='s_form' enctype="multipart/form-data">
    <div class="form-group">
    <label for="name">Full name</label>
        <input class="form-control" type="text" name='fname' id="fname"  value="<?php echo $row['Name']?>">
    </div>
 
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control"   type="email" name="email" id="email" value="<?php echo $row['Email']?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control"   type="password" name="password" id="password" value="<?php echo  $row['Password']?>">
    </div>


    <div class="form-group">
        <label for="number">Number</label>
        <input class="form-control"   type="number" name="number" id="number" value="<?php echo $row['Mobile']?>">
    </div>

    <div class="form-group">
        <label for="number">Date</label>
        <input class="form-control"  type="datetime-local" name="date" id="number" value="<?php echo $row['Date-time'] ?>">
    </div>



    <div class="form-group">
        <label for="">Gender</label>
    <input type="radio"  name="g" value="female" 
    
    <?php
    if($row['Radio']=='female')
    {
        ?>

        checked
        <?php
    }
    
    ?>
    />
<label for="">female</label>

<input type="radio"  name="g" value="Male" 
<?php
 if($row['Radio']=='Male'){
    ?>
    checked
    <?php
 }
 ?>
 />

<label for="contact_phone">Male</label>
    </div>


    <div class="form-group">
        <label for="">Position</label>
        <select name="position">
	
	<option value="Jr.Developer" <?php
    if($Position=="Jr.Developer"){?>
            selected

        <?php
    }
    
    
    ?>>Jr. Developer</option>
	<option value="Intern" <?php if($Position=="Intern"){
        ?>
        selected
        <?php
         } ?>>Intern</option>
	<option value="Sr.Developer" <?php if($Position=="Sr.Developer"){
        ?>
        selected
        <?php
    }
    ?>
     >Sr. Developer</option>
    <option value="Manager" <?php if($Position=="Manager"){
        ?>
        selected
        <?php

    }
    
    ?>> Manager</option>
</select>



</div>
<div class="form-group">
        <label for="">Picture</label>
        <input type="file"id="name"value=""name="file">
</div>
    
        <button type="submit"  name ="Submit">Update</button>
        <button type="submit" value="rt" name=""><a href="../Fetch.php">Cancel</a></button>
    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
























 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>










