?php include("database.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>search_data</title>
</head>
<body>


<div class="container">
    <form  class='form-inline'action="" method="POST">
      <input class='form-control mt-5' type="text"placeholder='Search item'name='search'>
      <input class='btn btn-danger ml-2 mt-5' type="submit"name='submit'>
    </form>
   
    <br><br>
</div>
</body>
</html>

<?php
            if(isset($_POST['submit']))
            {

                $search = $_POST['search'];
                $action = '';
            
                $sql="Select * from `employeemaster` where id like'%$search%' or EmpCode like'%$search%' or FirstName like'%$search%'
                or LastName like'%$search%'or Department like'%$search%'or Designation like'%$search%'or Phone like'%$search%'or Status like'%$search%'";
                $result=mysqli_query($conn,$sql);
            
                if($result)
                {
                   if(mysqli_num_rows($result)>0){
                     echo"<table class='table table-hover'>";
                     echo"<tr>
                     <th>Id</th>
                     <th>empcode</th>
                     <th>Firstname</th>
                     <th>lastname</th>
                     <th>department</th>
                     <th>designation</th>
                     <th>phone</th>
                     <th>status</th>
                     </tr>";
            
                    while($row= mysqli_fetch_assoc($result)){;
                     echo"<tr>";
                     echo"<td>".$row['Id']."</td>";
                     echo"<td>".$row['EmpCode']."</td>";
                     echo"<td>".$row['FirstName']."</td>";
                     echo"<td>".$row['LastName']."</td>";
                     echo"<td>".$row['Department']."</td>";
                     echo"<td>".$row['Designation']."</td>";
                     echo"<td>".$row['Phone']."</td>";
                     if($active=$row['Status']==1)
                
                      {   $active= "<button type='button' data-id=".$row["Id"]." data-sts=".$row['Status']." class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                       Active
                      </button>";
                        // $active ="";
                      
                      }
                     else{
                      $active= "<button type='button' data-id=".$row["Id"]." data-sts=".$row['Status']." class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                      InActive
                     </button>";

                     }
                     echo"<td>".$active."</td>";
                    
                     echo"</tr>";
                     echo"</tbody>";
                    } 
            
                   }else{
                    echo"<h2>DATA NOT FOUND</h2>";
                   }
                }
            } else{
                echo"please enter data";
            }
            
            
            ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<form>

<p>Are you sure you want to  <span id='csts'></span></p>
      
      <input type='hidden' id='rr' >
   
      <input type='hidden' id='bb'>



      <input type="button" value="update" onclick=update()>
          </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<script>



//triggered when modal is about to be shown
$('#exampleModal').on('show.bs.modal', function(e) {

//get data-id attribute of the clicked element
var bookId = $(e.relatedTarget).data('id');
var status = $(e.relatedTarget).data('sts');
$("#rr").val(bookId);
$("#bb").val(status);
});

function update()
{
var a =  document.getElementById('rr').value;
var b =  document.getElementById('bb').value;

   $.ajax({
            type: "POST",
            url : "update1.php",
            data: {id : a,status : b},
            success: function(response)
            {
              if(status==1)
{
  $('#csts').html('Inactive');
}
else if(status==0)
{
  $('#csts').html('Active');
}
  
            }
          }
        ) ;


}



  </script>