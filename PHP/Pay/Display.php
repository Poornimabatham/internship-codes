
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud App </title>
    <!-- Bootstrap css -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<?php

include 'Connection.php';

if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
}
    $query = "SELECT * FROM `employeemaster` WHERE `Id` ='$userid'";

                            $result = mysqli_query($conn, $query);
    $response='<table class="table table-bordered table-striped">';
                           

                            

 while($row=mysqli_fetch_assoc($result)){
   

    $ID = $row['Id'];
    // echo $ID;
    // exit;
    $EmpName = $row['FirstName']. $row['LastName'];; 
   
    $TA= $row['TotalAmount']; 
    $PA= $row['PaidAmount']; 

    $DA= $row['DueAmount']; 


    $response.='<tr><td>Name : </td>
                            
    <td>'.$EmpName.'</td>
    </tr>
    <td>Total : </td>
    <td>'.$TA.'</td>
</tr>

<td>Paid  : </td>
      <td>'.$PA.'</td>
      </tr>

      <td>DUE: </td>
      <td>'.$DA.'</td>
      </tr>
    
      <td>Amount to be paid:</td>
      

    <td>

    <form action="">
  
    <input type="text" id="textfield">
    
    </form>

      </td>
    </tr>';

    

}
$response.='</table>';
echo $response;
exit;


?>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>

  



$("#textfield").keyup(function(){
    var  txtVal =$(this).val();
  
  

  console.log(txtVal);
});
  
  


   
   
</script>






</body>
</html>








