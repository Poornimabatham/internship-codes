<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form action="" method="POST">
        <label for="name">name</label>
        <input class="form-control" type="text"  id="fname">
       
        <button type="submit" >submit</button>
    </form>

    <script>

        let form = document.querySelector("form");
        form.addEventListener("submit",(e)=>{
            e.preventDefault();
            let name  = document.querySelector("#fname").value;

            if(name == ""){

                alert("empty field");

            }
            else{
                console.log(name)
            }
             
        })
    </script>
</body>
</html>

<?php
$data=$_POST;
// echo"<pre>";
// print_r($data);
// print_r($_POST);

// printing TABLE FORMATE.........
    echo"<table border='2px'  cellpadding='10px'>";
    echo"<tr>
      <th>Name</th>
      <th>Phone</th>
      <th>Address</th>     
      <th>Phone no.</th>
      </tr>"; 

      echo"<tr>";
      foreach($data as $y){
      echo("<td>$y</td>"); 
      }   
      echo"</tr>";
    
    echo"</table>";

?>