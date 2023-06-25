




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="dash.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
    <style>
      

      body{
        overflow-x:hidden;
      }
      nav{
        background-color:#a7afcf;
      }
      .navbar .container-fluid ul li  {
        list-style: none;
       
      }
      
      .navbar .container-fluid ul li  .navbar-brand{
       font-size:23px;
        color:white;

      }
      .navbar .container-fluid ul li  .navbar-brand span{
        color:#355C7D;
      }
      
      .main .navbar-side{
        background-color:#F8B195;
        color:white;

      }
      .main .navbar-side ul li a .link-text{
        color:white;

      }
     
      .main .navbar-side ul li a .icon{
        color:white;

      }
      .container-fluid .table{
        margin-left:90px;
        width:90%;
      }
    </style>

  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg text-white ">
      <div class="container-fluid ">
       
        <ul>
          <li><a class="navbar-brand  text-white" href="#">UBI<span>SCHOOL</span> 
        <a class="navbar-brand  text-white" href="#"><span>Programm</span></a>
        

          </li>
        </ul>
    </div>
        <div class="dropdown show px-5  mx-5 ">
  <!-- <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
  <i class="fa fa-bars" aria-hidden="true" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

  <!-- </a> -->

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Change Password</a>
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="Logout.php">Logout</a>
  </div>
</div>

    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-sucess text-black" >
      <div class="container-fluid ">
        
      <h6 class="text-white">
        
<?php
session_start();
echo "welecome".$_SESSION['user_name'];

echo "my id is ".$_SESSION['organization_Id'];

if(!isset($_SESSION['user_name'])){
  echo "you are log out";
   header('location:Login.php');
}


?> 
      </h6>
      <div class="form-inline ">
          <select name="fetchval" id="fetchval">
            <option value="1" >Active</option>
            <option value="0">Inactive</option>
          </select>

<button   class="btn btn-info mx-2" data-bs-toggle="modal" data-bs-target="#myModal">Add </button>
      </div>
    

    </div>
    </nav>
    
    
             

    <div class="main">
    <div class="navbar-side">
      
      <ul>
        <li><a href="Dashboard.php" class="link-active" title="Dashboard">
            <span class="icon"><i class="fas fa-chart-bar"></i></span>
            <span class="link-text">Dasboard</span>
          </a></li>
        <li>
          <a href="#" class="myBtn" data-toggle="collapse" data-target="#my-sub" title="Post" aria-expanded="false">

          <span class="icon"><i class="fas fa-cog"></i></span>
          <span class="link-text">Settings</span>
        
          </a>
          <div id="my-sub" class="collapse bg-secondary">
            <a href="#" title="All Post">
              <span class="icon"><i class="fas fa-copy"></i></span>
              <span class="link-text">Programm</span>
            </a>
            <a href="class.php" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Class</span>
            </a>
            <a href="Shift.php" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Shift</span>
            </a>
            <a href="d.php" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Department</span>
            </a>
            <a href="#" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Designation</span>
            </a>
          </div>
        </li>
        <li><a href="#" title="Category">
            <span class="icon"><i class="fas fa-list-alt"></i></span>
            <span class="link-text">Staff</span>
          </a></li>
        <li><a href="#" title="Comment">
            <span class="icon"><i class="fas fa-comment"></i></span>
            <span class="link-text">Guardian</span>
          </a></li>
        <li><a href="#" title="Tags">
            <span class="icon"><i class="fas fa-tags"></i></span>
            <span class="link-text">Guardian</span>
          </a></li>
        
        
      </ul>
    </div>



    </div>
       

    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title text-center" id="myModalLabel">Add</h4>
            </div>

            <div class="modal-body">
              <form action="" id="form1">
                <div  action="" method="post">
                    <div class="modal-body">
                    <div id="message"></div>
                        <label class="control-label"> Add Programm</label>
                        <input type="text" class="form-control" name="name1" id="name1" />
                        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>

                        <button  type="button"  class="btn"  id="Submit">Add</button>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>

     <div class="container-fluid">
      <table class="table">



<tbody id="search_result">

     

</tbody>
</table>
      </div>
     </div>
              
      















     <!-- !-- !-- Modal -->  
<div class="modal fade
" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update programm</h5>
      </div>
      
      <div class="modal-body">



<form action="" enctype="multipart/form-data" id="form2">
<div class="form-group">
<label for="Updatename">Full name</label>
    
<input class="form-control" type="text" name='Updatename' id="Updatename"  >
<input class="form-control" type="text" name='Updatestatus' id="Updatestatus"  >

</div>

   








      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary" onclick="Update()">Update</button>
<input type="hidden" id="hiddenData">
    </div>

</form>

    </div>
  </div>
</div>


<!-- Update modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
<script>


  
$(document).ready(function(){

$("#fetchval").on('change',function(){

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
$(document).ready(function(){
    displayData()
    
});
    // Display  the  insert  data
     function displayData(){
        var displaydata = "true";
        $.ajax({
            url:"Display.php",
            type:"POST",
            data:{
                displaySend:displaydata,
            },
            success:function(data,status){
              
$('#search_result').html(data);

            }
            
        });
     }



     $('#Submit').on('click',function()
     {

     
    

        var name = $('#name1').val();
        

        
if(name==""){
    alert("empty feild");
}
else{
    $.ajax({
            url:"Display.php",
            type:'POST',
            data:{
                name:name,
                
            },
            success:function(data)
            {                
              $("#message").html(data);
              // alert(data);
              // console.log(data);


                              

                displayData()
                
            }
        });

}

       
})
    


  
  function User(id){
        // alert(id);
        // console.log(id);
        $.ajax({
            url: "Delete.php",
            type: "post",
            data: { Send: id},
            success: function(data){
                // console.log(response);
                // alert(data);
                displayData();
            }
            

        });
    }



    function UserDetails(id,status){
      // alert(id);
      // alert(status)
      $('#hiddenData').val(id);
      
      $.post("Update.php",
    {updateID:id,Status:status},
    function(data){
// console.log(data);
// console.log(status);

        var user = JSON.parse(data);

        $("#Updatename").val(user.program_Name);
        $("#Updatestatus").val(user.status);

        // $("#Updateemail").val(user.Email);





    });
    $("#UpdateModal").modal("show");
    

  }


    

  function Update(){
    var updatename =$("#Updatename").val();
    var Updatestatus = $('#Updatestatus').val();
    var hiddenData = $("#hiddenData").val();


    $.post("Update.php",{
   updatename :updatename,
   Updatestatus:Updatestatus,

   hiddenData : hiddenData,

 },function(data){
    $("#UpdateModal").modal("hide");
    displayData();

 }
 );
  }

 
  </script>
</html>