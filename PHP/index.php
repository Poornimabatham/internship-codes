<?php


$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));


$string = "JAVATPOINT";  
echo "Reverse string of $string is " .strrev ( $string ); 
echo "<br>" ;

$arr = array("Welcome","to", "GeeksforGeeks", 
    "A", "Computer","Science","Portal");  
    
// Converting array elements into
// strings using implode function
echo implode(" ",$arr);

echo "<br>";

$str = "Hello world. It's a beautiful day.";
  
// Converting string elements into
// array using implode function
print_r (explode(" ",$str));

// $a = 12;
// --$a;
// echo $a++;
$a =10;
$b=4;
$c=3;
echo ($a%($b)+$c);



$var = ["welcome","to","the","javatpoint"];
print_r($var);

echo "welcome","to","the","javatpoint";



$cars = array (
    array("Volvo",22,18,90),
    array("BMW",15,13,890,66,90),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  
  ?>
  <table border="2" >

  <thead>



<?php
  for ($row = 0; $row < count($cars); $row++) {
    ?>
    <tr>
    <?php
    for ($col = 0; $col < count($cars[$row]); $col++) {
      echo "<th>".$cars[$row][$col]."</th>";
    }
    ?>
    </tr>
    <?php
    echo "<br>";
  }
?>
</table>
</thead>



<?php

$array = array('key'=>"12" ,"key2"=> "34");

$keys = array_keys($array);

?>
<table border="2">
  <thead>
    <tr>
<?php
for($i=0;$i<count($keys);$i++){
  echo  "<th>". $keys[$i].''. $array[$keys[$i]]."</th>";

  ?>
  </tr>
  <?php
 
  echo "<br>";
}



?>
</thead>
</table>