<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST">
    <input type="text" name = "uname">
    <input type="text" name="password" id="">
    <input type="submit" name="">
</form>
</body>
</html>
<?php

echo "<pre>";
// print_r($_POST);

$arr = array_keys($_POST);
// print_r($arr)

echo"<table border='2px'>";

for($i=0;$i<count($arr);$i++){
    echo"<tr>";
    print "<td>" $_POST($arr[$i]) "</td>";
}
echo "</tr>";

echo"</table>";

?>
