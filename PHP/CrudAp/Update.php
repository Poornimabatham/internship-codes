<?php
include 'Connection.php';


?>
<?php

if(isset($_POST['updateID'])){
    $user_id = $_POST['updateID'];
    $sql = "SELECT * FROM `crud`  WHERE  `Id`  = $user_id";
    $result = mysqli_query($conn,$sql);
    $response = array();
    while($row = mysqli_fetch_assoc($result)){
        $response = $row;
    }
    echo json_encode($response);

}
else{
    $response['status']=200;
    $response['message']="Invalid or data not found";
}


?>
