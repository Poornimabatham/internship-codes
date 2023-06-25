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
    <!-- Button trigger modal -->



<form action="">
  
<input type="text" id="textfield">

</form>





<div class="container mt-3">
    
<div id="displaydataTable" class="container-fluid mt-4 ">
    
</div>
</div>





<div class="container mt-3">
    
<div id="Table" class="container-fluid mt-4 ">
    
</div>
</div>


<!-- Inacive Modal -->
<div class="modal fade" id="InacivtModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to change status to active</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-primary" id="Inactivechange">change status</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"></button>
      </div>
    </div>
  </div>
</div>



<!--  active Modal -->
<div class="modal fade" id="activeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to change status to Inactive</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-primary" id="activechange">change status</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"></button>
      </div>
    </div>
  </div>
</div>









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script>
   

  $("#textfield").keyup(function(){
    var  txtVal =$(this).val();
  
  

  console.log(txtVal);
  
    $.ajax({
      url:'Search.php',
      method:"POST",
      data:{txtVal:txtVal},
      success: function(data){
        console.log(data);
        $("#displaydataTable").html(data);

      }
    });
  })
  
function User(id,iv){
  //  alert(id);
  //  alert(iv);
  console.log(id);
  console.log(iv);


  if(iv==1){
    $('#InacivtModal').click(function(){

    $.ajax({
      url:'active.php',
      method:"POST",
      data:{id:id,status:iv},
      success: function(data)
      {

        console.log(data);
                if(data==true){
                    
                    
                    alert("data delete successfully");
                    location.reload();

                    
                }

      }
    });

  })
  
  
  $('#InacivtModal').modal("show");


  }
  else{
    $('#activeModal').click(function(){

    $.ajax({
      url:'active.php',
      method:"POST",
      data:{id:id,status:iv},
      success: function(data)
      
      {
        console.log(data);
                if(data==true){
                    
                    
                    alert("data delete successfully");
                    location.reload();

                    
                }


      }
    });

  })
  
  
  
  $('#activeModal').modal("show");


  }
  
}


 
// function get(id){
//   // alert(id);

//   $('#Inactivechange').click(function(){
//     $.ajax({
//       url:'active.php',
//       method:"POST",
//       data:{status:id},
//       success: function(data){
//         console.log(data);

//       }
//     });

//   })
  
  
  
//   $('#InacivtModal').modal("show");
// }
       
// // function c
       
// // function change(){
// //   // alert("heelo");
  
  
  
// // }
  
</script>
</body>
</html>