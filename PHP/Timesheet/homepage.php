 <?php
 include 'Connection.php';


?>
 <!DOCTYPE html>
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
  
   



<!-- Modal-->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>   
      
     <!-- modal body  -->
      <div class="modal-body">
        
<div class="row">
        <!-- <input class="form-control"   type="number" name="number" id="country" onchange="CityFetch(this.value)"> -->
        <label for="UpdateCountry">Employee Name</label>
        <select name="country" id="Country">
        <option value="">Select Name</option>


        </select>

    </div>
    <div class="row">
        <!-- <input class="form-control"   type="number" name="number" id="country" onchange="CityFetch(this.value)"> -->
        <label for="Project">Project</label>
        <select name="Project" id="Project">               
          <option value="">Select</option>


        </select>

    </div>
    <div class="row">
        <!-- <input class="form-control"   type="number" name="number" id="country" onchange="CityFetch(this.value)"> -->
        <label for="Milestone">Milestone</label>
        <select name="Milestone" id="Milestone"> 
          <option value="">Select one</option>
        </select>

    </div>
    <br><br>
    <div class="form-group">
      <label for="">Task</label>
      <input type="text" name="" id="Task">
    </div>
<br>
<br>
    <div class="form-group">
      <label for="">Date</label>
      <input type="date" name="" id="Date">
    </div>

    <br>
<br>
    <div class="form-group">
      <label for="">Time</label>
      <input type="time" name="" id="Time">
    </div>

    <br>
<br>
    <div class="form-group">
      <label for="">Description</label>
      <input type="text" name="" id="Desc">
    </div>

        
      </div>
    <!-- modal body close  -->
      <div class="modal-footer">
      <button type="hidden" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        <button type="hidden" class="btn btn-secondary" data-bs-dismiss="modal" onclick="AddUser()">Add</button>
        
      </div>
    </div>
  </div>
</div>
</table>
</div>
<div class="container mt-3">
    <h1 class="text-center">ADD USER HERE</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#completeModal">
Add user
</button>

</div>

<script>

   

  

$.ajax({
        type: "POST",
        url: "country.php",
        data: { country: 'country'},
        success: function (response) {
            console.log(response);
            $('#Country').html(response);
            

        }
    });
    $.ajax({
        type: "POST",
        url: "country.php",
        data: {Project: 'Project' },
        success: function (response) {
            // console.log(response);
            //
            $('#Project').html(response);


        }
    });
    


  
  $("#Project").on('change', function () {
        var project = this.value;
        console.log(project);
        $.ajax({
            type: "post",
            url: "country.php",
            data: { stone: project },
            success: function (response){
                // console.log(data);
                $('#Milestone').html(response)
            }
        })

    });


  



    function AddUser(){
      // debugger
      var name = $("#Country").val()
      var Project = $("#Project").val()

      var Milestone= $("#Milestone").val()

            var Task = $("#Task").val();
            var Date= $("#Date").val();
            var Time = $("#Time").val();

            var Desc = $("#Desc").val();
            console.log(name);
            console.log(Project);

            console.log(Milestone);
            console.log(Task);

            console.log(Date);

            console.log(Time);
            console.log(Desc);



            $.ajax({
                url:"country.php",
                type:"post",
                data: {name:name,
                Project:Project,
              Milestone:Milestone,
            Task:Task,
          Date:Date,
        Time:Time,
      Desc:Desc},
        success:function(response){
            // status  means success or not
            alert(response);
            

        }
            });

        }
</script>
</body>
</html>