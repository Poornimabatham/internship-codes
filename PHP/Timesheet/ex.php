

<?php
 include 'connection.php';


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









<select id="counterupBackgrounds1" class="form-control counterupBackgrounds1">
    <option value="business-girl.png">business-girl.png</option>
    <optgroup>
        <option value="bubbles.jpg">bubbles.jpg</option>
        <option value="bug-eggs.png">bug-eggs.png</option>
        <option value="bureau.jpg">bureau.jpg</option>
        <option value="business-girl.png">business-girl.png</option>
        <option value="city-road.jpg">city-road.jpg</option>
        <option value="deep-sea.png">deep-sea.png</option>
        <option value="light-spots.png">light-spots.png</option>
        <option value="paper-birds.png">paper-birds.png</option>
        <option value="paper-stripes.png">paper-stripes.png</option>
        <option value="sea-shore.jpg">sea-shore.jpg</option>
        <option value="soft-mountains.png">soft-mountains.png</option>
       <option value="stars-spiral.jpg">stars-spiral.jpg</option>
    </optgroup>
</select>

<select id="counterupBackgrounds2" class="form-control counterupBackgrounds2">
    <option value=""></option>
    <optgroup id="foundedImages_parallax">
        <option class="user-images_parallax" value="see-shore.jpg">see-shore.jpg</option>
        <option class="user-images_parallax" value="stars-spiral.jpg">stars-spiral.jpg</option>
    </optgroup>
</select>



<script>


$(document).ready(function(){
     $('#counterupBackgrounds1').on('change',function(){
    console.log('2 is changed')
     $('#counterupBackgrounds2 option')[0].selected = true;
   })

    $('#counterupBackgrounds2').on('change',function(){
        console.log('1 is changed')
     $('#counterupBackgrounds1 option')[0].selected = true;
   })
})
</script>
    </body>
</html>
