
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

//     echo"<pre>";
// print_r($_FILES);
// exit;
    
$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

if($extension=='png' || $extension=="jpg" || $extension=="jpeg" || $extension=="gif")
{

    if(move_uploaded_file($_FILES["file"]["tmp_name"],'New/'.$_FILES["file"]["name"]))
    {
        echo"donn move file";
        $path = $_FILES["file"]["name"];
        
    // echo $path;
    // exit;
    // $extension = pathinfo($path, PATHINFO_EXTENSION);
    $think = 'New/'.$path;
    // echo $think;
    // exit;
 
      
    //   echo $sql1;
 
    }
    else
    {
        echo"failed";
    }
}
else{
    echo '<scipt>alert("not extension")</script>';
}

   

$Myname = $_POST['fname'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Mobile  = $_POST['number'];
$date = $_POST['date'];
$Check = $_POST['g'];
$Position = $_POST['position'];

 
    
      $sql1 = "UPDATE `form` SET `ID` = '$id' ,`Name`='$Myname',`Email`='$Email',`Password`='$Password',`Mobile`='$Mobile',`Date-time`='$date',`Radio`='$Check',`Position`='$Position' ,`PIC`= '$think' WHERE `ID` = '$id'";
      
      
    //   echo $sql1;
    //   exit;
      if(mysqli_query($conn,$sql1)){
    //  echo "updated successfuulyy";
     header("location:../Fetch.php");
}
else{
    echo "error". $sql."" .mysqli_error($link);
 }
}

else{
    echo "not post data";
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
































?php include("database.php"); 

$id = $_GET['id'];
//  echo $id;
//  exit;
$sql= "SELECT * FROM `children` WHERE id =$id";
// print_r($sql);
// exit;

$result=mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);

$name = $row["name"];
$age= $row["age"];
$number =$row["number"];
$date =$row["cur_date"];
$gender =$row["Gender"];
$position =$row["position"];
// $ext =$row["file"];
$email = $row["email"];
$image =$row["image"];
// echo $position;
// exit;

//  print_r($_POST);

if(isset($_POST['update'])){
    $name=$_POST['fname'];
    $age=$_POST['age'];
    $number =$_POST['number'];
    $date= $_POST['date'];
    $gender =$_POST['gen'];
    $position =$_POST['position'];
    // $ext =$_POST['file'];
    $email =$_POST['email'];
    $image= $_POST['image'];
    // echo $image;
    // exit;
    $path = $_FILES['image']['name'];
    $ext = pathinfo($path,PATHINFO_EXTENSION);
    // $filetype=$_FILES['image']['name'].$ext;
    // $upload='../php/'.$path;
    if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif'){
        move_uploaded_file($_FILES["image"]['tmp_name'],'../php/'.$_FILES["image"]['name'].'');
       }
    // if(move_uploaded_file($_FILES["image"]['tmp_name'],'../php/'.$_FILES["image"]['name'].''))
    // {
        // echo 'done';
    // }
  
    $sql1= "UPDATE `children` SET `name`='$name', `age`='$age',`number`='$number',`cur_date`='$date',`Gender`='$gender',`position`='$position',`email`='$email',`image`='$path' WHERE `id`='$id'";
    //  print_r($sql1);
     
if(mysqli_query($conn,$sql1)){
    // echo "updated successfuulyy";
    header("location:../fetch.php");
}
else{
echo "error";
}
}
if(isset($_POST['cancel'])){
    header("location:../fetch.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello world!</title>
  </head>
  <body>
  <form method="POST" enctype="multipart/form-data">

<label for="name">Name</label>
<input type="text" name="fname" id="fname" value="<?php echo $name; ?>">
<br>
<br> 
<label for="age">Age</label>
<input type="text" name="age" value="<?php echo $age;?>">
<br>
<br>
<label for="number">Number</label>
<input type="text" name="number" value="<?php echo $number;?>">
<br>
<br>
<label for="date">Date</label>
<input type="datetime-local" name="date" value="<?php echo $date;?>">
<br>
<br>
<label for="gender">Gender</label>
<label for="">Male</label>
<input type="radio" name="gen" value="male"
<?php
if($gender=='male') 
{
    ?>
    checked
    <?php
}
?>
>
<br>
<br>
<label for="">Female</label>
<input type="radio" name="gen" value="female"
<?php
if($gender=='female') 
{
    ?> 
    checked
    <?php
}
?>
>
<br>
<br>
<label for="position">Position</label>
<select name="position" id="">
<option value="jr.developer"
<?php
if($position=="jr.developer")
{
    ?>
    selected
    <?php

}
?>
>Jr. Developer</option>

<option value="sr.developer"
<?php
if($position=="sr.developer")
{
    ?>
selected
<?php
}
?>
>Sr. Developer</option>

<option value="intern"<?php
if($position=="intern")
{
    ?>
selected
<?php
}
?> >Intern</option

>
<option value="manager"
<?php
if($position=="manager")
{
    ?>
selected
<?php
}
?>
>Manager</option>
</select>
<br>
<br>
<!-- <input type="file" name="file" > -->
<!-- <br> -->
<!-- <br> -->
<label for="em">Email</label>
<input type="email" name="email" value="<?php echo $email;?>" >
<br>
<br>
<label for="img">Image</label>
<input type="file" name="image">
<br>
<br>
<input type="submit"  name="update" value="update">
<input type="submit"  name="cancel"value="cancel">

</form>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>






 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>










