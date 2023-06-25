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
        <input type="hidden" id="id">
        <br><br>
      <label for="">Employee</label>
      <input type="text" id="name" value="" disabled>
      <br><br>
      <label for="">Total</label>
      <input type="text" id="total" disabled>
      <br><br>
      <label for="">Due</label>
      <input type="text" id="due" disabled>
      <br><br>
      <label for="">Paid Amount</label>
      <input type="text" id="paid" disabled>
      <br><br>
      <label for="">Amount to be paid</label>
      <input type="text" id="paidamount">
      <br><br>
      <button id="pay" class="btn btn-danger">PAY</button>

      </div>
    <!-- modal body close  -->
     
                           <div class="modal-footer">
                          
                                <button type="hidden" class="btn btn-danger" id="paid">close</button>
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


    echo "<td><button data-id='".$Id."' data-da='".$DA."'  id='userinfo'>Update</button></td>";
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

$('#userinfo').click(function(){

     var userid = $(this).data('id');

     var userda = $(this).data('da');

     alert(userid);
     alert(userda);
     // debugger
if(userda==0)

{

     $("#pay").attr("disabled", true);

}
    
else
{
     $("#pay").attr("disabled", false);
}


$("#pay").click(function(){
   var pay=$("#pay").val();
   var due=$("#due").val();
   var paid=$("#paid").val();
   var id=$("#id").val();
   var paidamount=$("#paidamount").val();
    $.ajax({
      type:"POST",
      url:"Edit.php",
      data:{id:id,
            pay:pay,
            due:due,
            paid:paid,
            paidamount:paidamount
      }, 
      success:function(response){
          alert(response);
      }
    });
  });    
});
});






</script>

</body>
</html>