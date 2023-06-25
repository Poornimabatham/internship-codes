 <?php 
//   ANS NO 1
function Fibonacci($number){
      
    // if and else if to generate first two numbers
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    // Recursive Call to get the upcoming numbers
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}


  

$number = 20;
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),' ';
}



// ANS NO2
//   $string = "ved";

//     $string_lenght = 0;
//     while($string[$string_lenght] != null){
//         $string_lenght++;
//     }

//     echo "Total String Length : ". $string_lenght;



//     echo "<br><br>";


// ANS NO 3
// $string = 'Welcome';
 
// echo "Entered String: " . $string . "<br />"; 
// // find string length
// $str_len= strlen($string);

// echo "Reversed String: "; 

// // loop through it and print it turn around
// for ( $x = $str_len - 1; $x >=0; $x-- )
// {
//   echo $string[$x];
// }

echo "<br><br>";






// ANS NO6

// $name = array(
//      'ravi',
//      'anuj',
//      'ajay',
//      'anuj',
//      'vijay',
// );

// $new= array_unique($name);
// print_r($new);



    //  ANS NO  7
    // ...Star pattern3(Right-Triangle)
// for($i=0;$i<=4;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo('*');
//     }
//     echo('<br>');
// }


echo "<br>";
// ANS NO 8

//  $name = "poornima";
//  $last ="batham";
//   $fullname = $name." ".$last;
//   echo strtoupper($fullname);


//    echo "<br><br>";

// //    ANS NO 9
//      $Count = "HelloWorld";
//       $num = strlen($Count);
//      echo  $num;

//     echo "<br><br>";





    // ANS NO 10

$arr = [9,0,6,7,9];
    $pos = 3;
    $val = '$';
 
    $result = array_merge(array_slice($arr, 0, $pos), array($val), array_slice($arr, $pos));
    // print_r($result);
    echo join(" ", $result);
    

 
//  echo "<br><br>";






//  ANS NO 5
 $b = "Space Manage in Pedodontics using Remove Fixed Apply";
 $search=array("Manage","Remove","Apply");
$replace=array("Management","Removable","Appliacnces");
echo '<b>'."String before replacement:".'</br></b>';  

echo $b;
$newstr = str_replace($search, $replace, $b); 
echo '<br><br>'."New replaced string is:".'</br></b>';  
echo $newstr.'</br>';  

?>







