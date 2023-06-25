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
    


     <div class="container" >
          <!-- Modal -->
          <div class="modal fade" id="empModal" >
                <div class="modal-dialog">
 
                      <!-- Modal content-->
                      <div class="modal-content">
                           <div class="modal-header">
                                <h4 class="modal-title">User Info</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                           </div>
                           <div class="modal-body">
                           
                           </div>
                           <div class="modal-footer">
                          
                                <button type="button" class="btn btn-danger" id="paid"  data-bs-dismiss="modal">Pay</button>
                           </div>
                      </div>
                </div>
          </div>
          <br/>

          <!-- Employees List -->
          <table class='table' border='1' style='border-collapse: collapse;'>
          
                                <tr>
                                    <th>EmpCode</th>
                                    <th>ID</th>
                                    <th>FIRSTNAME</th>
                                    <th>LASTNAME</th>
                                    <th>DEPARTMENT</th>
                                    <th>DESIGNATION</th>

                                    <th>PHONE</th>
                                    <th>TOTALAMOUNT</th>

                                    <th>PAIDAMOUNT</th>

                                    <th>DUEAMOUNT</th>


                                </tr>
              


<?php

include 'Connection.php';


  $query = "SELECT * FROM `employeemaster`";

                            $result = mysqli_query($conn, $query);
         

                            

 while($row=mysqli_fetch_assoc($result)){
   

    $EmpCode = $row['EmpCode'];
    $Id= $row['Id']; 
    $Fname= $row['FirstName']; 
    $lname= $row['LastName']; 
    $Department= $row['Department']; 

    $Designation= $row['Designation']; 
    $Phone= $row['Phone']; 
    $TA= $row['TotalAmount']; 
    $PA= $row['PaidAmount']; 

    $DA= $row['DueAmount']; 










    
    echo "<tr>";
    echo "<td>".$Id."</td>";
    echo "<td>".$EmpCode."</td>";
    echo "<td>".$lname."</td>";

    echo "<td>".$lname."</td>";

    echo "<td>".$Department."</td>";

    echo "<td>".$Designation."</td>";

    echo "<td>".$Phone."</td>";

    echo "<td>".$TA."</td>";
    echo "<td>".$PA."</td>";

    echo "<td>".$DA."</td>";


    echo "<td><button data-id='".$Id."' data-da='".$DA."'  class='userinfo'>Pay</button></td>";
    echo "</tr>";
    
}


?>
</table>

     </div>










     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
  
$(document).ready(function(){

$('.userinfo').click(function(){

     var userid = $(this).data('id');

     var userda = $(this).data('da');

     // alert(userid);
     alert(userda);
if(userda==0)

{

     $("#paid").attr("disabled", true)

}
    


     // AJAX request
     $.ajax({
           url: 'Display.php',
           method: 'post',
           data: {userid: userid},
           success: function(response){ 
                // Add response in Modal body
                $('.modal-body').html(response);

                // Display Modal
                $('#empModal').modal('show'); 
           }
     });
});
});


     
  $("#fname").click(function(){
    var  txtVal =$(this).val();
    
//   alert(id);
//   alert(da);

if(txtVal==da || (txtVal<da && txtVal>0)){
     $('#paid').click(function()
     {
          
          $.ajax({
           url: 'Update.php',
          //  datatype:'JSON',
           method: 'post',
           data: {userid: id,txtVal:txtVal},
           success: function(response)
           { 
               var dataResult = JSON.parse(response);
               console.log(dataResult['msg']);
               //  // Add response in Modal body
               //  $('.modal-body').html(response);

               //  // Display Modal
               //  $('#empModal').modal('show'); 
           }
     });


     })
    
    
}

else {
     alert("value is above da");
     
}


  });
 





</script>

</body>
</html>