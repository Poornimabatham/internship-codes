
<?php


include 'index.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$sql2 =  "SELECT * FROM  `country_master`";


$query=mysqli_query($conn,$sql2);
$row_Count = mysqli_num_rows($query);

?>
<select name="country" id="">
    
       <option value="">Select one</option>
<?php

for($i=1;$i<=$row_Count;$i++)
{
    $row = mysqli_fetch_array($query);

        ?>
                <option value="<?php echo $row['id'];?>"><?php echo $row['country_name'];?></option>

<?php
}?>
       </select>

       

</body>
</html>







       














