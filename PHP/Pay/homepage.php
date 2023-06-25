[16:45, 09/05/2023] Poono: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>   
<title>Document</title>
    <style>
      table,th,tr{
        border:2px solid black;
      }
      table{
        margin-left:20px;
        margin-top:20px;
      }
      .container{
        width:100vw;
        height:50vh;
      }
    </style>
</head>
<body>
  <div class="container">
    <table class="table" style='border-collapse: collapse;' > 
        <tr>
            <th>EmpCode</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Total amount</th>
            <th>Paid amount</th>
            <th>Due payment</th>
            <th>Action</th>
        </tr>   
<?php
include "connection.php";
 

  $q="SELECT * FROM `employeemaster`";
  $result=mysqli_query($conn,$q);
  while ($row=mysqli_fetch_array($result)){
?>
  <tr>
   <td><?php echo $row['EmpCode']; ?></td>
   <td><?php echo$row['FirstName']; ?></td>
   <td><?php echo $row['LastName']; ?></td>
   <td><?php echo $row['TotalAmount']; ?></td>
   <td><?php echo $row['PaidAmount']; ?></td>
   <td><?php echo $row['DueAmount'] ?></td>
   <td><!-- Button trigger modal -->
   <button class="btn btn-info"
   data-id="<?php  echo $row['Id'] ?>"
    data-name="<?php echo $row['FirstName'];?>"
    data-total="<?php echo $row['TotalAmount']?>"
    data-due="<?php echo $row['DueAmount']?>"
    data-paid="<?php echo $row['PaidAmount'] ?>"
    onclick="$('#id').val($(this).data('id'));
    $('#name').val($(this).data('name'));
    $('#total').val($(this).data('total'));
    $('#due').val($(this).data('due'));
    $('#paid').val($(this).data('paid'));
    $('#exampleModal').modal('show');"> PAY
      </button>
    </td>
  </tr>
  <?php  
  }

?>

<!-- Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>   
      
     <!-- modal body  -->
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
        <button type="hidden" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</table>
</div>

<script>  
$(document).ready(function(){
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

</script>
</body>
</html>