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

<!-- Modal -->
<div class="modal  hide fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container">
      <div class="modal-body">



<form action="" enctype="multipart/form-data">
<div class="form-group">
<label for="fname">Full name</label>
    <input class="form-control" type="text" name='fname' id="fname"  >
</div>


<div class="form-group">
    <label for="email">Email</label>
    <input class="form-control"   type="email" name="email" id="email">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input class="form-control"   type="password" name="password" id="password">
</div>


<div class="form-group">
    <label for="number">Number</label>
    <input class="form-control"   type="number" name="number" id="number">
</div>

<div class="form-group">
    <label for="number">Date</label>
    <input class="form-control"  type="datetime-local" name="date" id="date">
</div>



<br>

<
<br>

<div class="row">
        <!-- <input class="form-control"   type="number" name="number" id="country" onchange="CityFetch(this.value)"> -->
        <label for="country">Country</label>
        <select name="country" id="Country">

        </select>

    </div>

    



    <div class="row">
            <label>City:</label><br /> <select name="city"
                id="City">
                <option value="">Select city</option>
            </select>
        </div>

       


      </div>
      </div>
      <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button type="submit" class="btn btn-primary" id="myFormSubmit"  onclick="addUser()">Submit</button>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary"  >Submit</button> -->

    </div>

</form>

    </div>
  </div>
</div>














<div class="container mt-3">
    <h1 class="text-center">ADD USER HERE</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#completeModal">
Add user
</button>
<div id="displaydataTable" class="container-fluid mt-4 ">
    
</div>
</div>




















<!-- Update modal -->

<!-- !-- Modal --> 
<div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container">
      <div class="modal-body">



<form action="" enctype="multipart/form-data">
<div class="form-group">
<label for="Updatename">Full name</label>
    <input class="form-control" type="text" name='Updatename' id="Updatename"  >
</div>


<div class="form-group">
    <label for="Updateemail">Email</label>
    <input class="form-control"   type="email" name="email" id="Updateemail">
</div>

<div class="form-group">
    <label for="Updatepassword">Password</label>
    <input class="form-control"   type="password" name="password" id="Updatepassword">
</div>


<div class="form-group">
    <label for="Updatenumber">Number</label>
    <input class="form-control"   type="number" name="number" id="Updatenumber">
</div>

<div class="form-group">
    <label for="Updatedate">Date</label>
    <input class="form-control"  type="datetime-local" name="date" id="Updatedate">
</div>



<br>

<
<br>

<div class="row">
        <!-- <input class="form-control"   type="number" name="number" id="country" onchange="CityFetch(this.value)"> -->
        <label for="UpdateCountry">Country</label>
        <select name="country" id="UpdateCountry">

        </select>

    </div>

    



    <div class="row">
            <label for="UpdateCity">City:</label><br /> <select name="city"
                id="UpdateCity">
                <option value="">Select city</option>
            </select>
        </div>

       


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

















<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script>
    
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
$('#displaydataTable').html(data);
            }
            
        });
     }



    //  INSERT AJAX CODE
    function addUser(){
        var name = $('#fname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var number = $('#number').val();
        var date = $('#date').val();

        // var gender = $('#j').val();
        var Country = $('#Country').val();
        var City = $('#City').val();


        
if(name==""){
    alert("empty feild");
}
else{
    $.ajax({
            url:"insert.php",
            type:'POST',
            data:{
                name:name,
                email:email,
                password:password,
                number:number,
                date:date,
               Country:Country,
               City:City
            },
            success:function(data,status)
            {
alert(data);
// alert(status);

                // console.log(data);
                $('#completeModal').modal('hide');
                displayData();
            }
        });

}

       
    }


    // iNSERT AJAX CODE



     // Delete records by DeleteUser()
     function User(deleteid){
        // alert(id);
        // console.log(id);
        $.ajax({
            url: "Delete.php",
            type: "post",
            data: { Send: deleteid},
            success: function(data,status){
                // console.log(response);
                alert(data);
                displayData();
            }
            

        });
    }










    $.ajax({
        type: "POST",
        url: "country.php",
        data: { country: 'country' },
        success: function (response) {
            // console.log(response);
            $('#Country').html(response);
        }
    });




    $("#Country").on('change', function () {
        var city = this.value;
        // console.log(city);
        $.ajax({
            type: "post",
            url: "getcity.php",
            data: { citydata: city },
            success: function (response){
                console.log(response);
                $('#City').html(response)
            }
        })

    });
    
// uodate details

  function  UserDetails(id){
    console.log(id);

    // Storing the id in input fileed whose id is hiddenData
    $('#hiddenData').val(id);
    $.post("Update.php",
    {updateID:id},
    function(data,status){
// console.log(data);
console.log(status);

        var user = JSON.parse(data);

        $("#Updatename").val(user.Name);
        $("#Updateemail").val(user.Email);


        $("#Updatepassword").val(user.Password);
        $("#Updatenumber").val(user.Mobile);
        $("#Updatedate").val(user.Date);
        $("#UpdateCountry").val(user.Country);     
           $("#UpdateCity").val(user.City);




    });
    $("#UpdateModal").modal("show");
    

  }
  function Update(){
   var updatename =$("#Updatename").val();
   var updateemail =$("#Updateemail").val();


    var updatepass=  $("#Updatepassword").val();
    var updatenum = $("#Updatenumber").val();
    var updatedate = $("#Updatedate").val();
    var updatecountry= $("#UpdateCountry").val();     
    var updatecity =  $("#UpdatenCity").val();
     var hiddenData = $("#hiddenData").val();
 $.post("Edit.php",{
   updatename :updatename,
   updateemail :updateemail,


     updatepass: updatepass,
 updatenum :updatenum,
     updatedate :updatedate,
     updatecountry: updatecountry,     
     updatecity : updatecity,
     hiddenData : hiddenData
 },function(data,status){
    $("#UpdateModal").modal("hide");
    displayData();

 }
 );
  }
</script>
</body>
</html>