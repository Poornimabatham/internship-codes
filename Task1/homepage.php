<?php include('Connection.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</head>
<body>
    <div class="container">

        <h2 class="text-center mt-5 mb-4"> ---SEARCH BAR---</h2>
       
       <input type="text" class="form-control" id="searching" name="searching" autocomplete="off" placeholder="search..">

    </div>
    <br><br>
    <div>
      <table class="table table-striped text-center">

        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>Status</th>
            <th>Operation</th>
        </tr>
        <tbody id="search_result">

             

        </tbody>
      </table>
    </div>

    
<!-- The Modal -->
<div class="modal" id="empModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

         <input type="text" id='id' >
         <input type="text" id='status' >
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" id="update" class="btn btn-danger" data-bs-dismiss="modal">update</button>
        <button type="button" id="change" class="btn btn-danger" data-bs-dismiss="modal">change</button>

      </div>

    </div>
  </div>
</div>


    <script>

$(document).ready(function(){

    $("#searching").keyup(function(){

        var input = $(this).val();
        console.log(input);

            $.ajax({

                url:"Search.php",
                type:"POST",
                data:{txtVal:input},
                success:function(data){
                    $("#search_result").html(data)

                }

            });
    
    });
});

// $('#myModal').on('show.bs.modal', function(e)
//  {

//  alert('ghjk');

// });


function User(ab,bb)
{
  //  alert(ab); 
  //  alert(bb);
  $('#empModal').modal('show'); 


  $("#id").val(ab);
  $("#status").val(bb);


  $("#status").on(function(){

    var status = $(this).val(); 
    alert(status);

  $('#change').click(function(){

    $.ajax({
             url:"actives.php",
             type:"POST",
             data:{id:ab,sts:status},
             success:function(data)
             {
                console.log(" status updated");
             }

           });

});
 
});
}

// function dlt(de){
//   // alert(de);

//   $("#delete").click(function(){
// var txt=de;
// // alert(txt);
//      $.ajax({
//          url:"deletee.php",
//          type:"POST",
//          data:{txt:txt},
//          success:function(data)
//          {
//           concole.log("data deleted");
//          }
//      });

//   });
// }


</script>

</body>
</html>