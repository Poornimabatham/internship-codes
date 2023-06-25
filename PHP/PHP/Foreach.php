<?php  

/* Creating an associative array */

$student_one = array("Maths"=>95, "Physics"=>90,  

                  "Chemistry"=>96, "English"=>93,  

                  "Computer"=>98);   

/* Looping through an array using foreach */


foreach ($student_one as $subject => $marks){ 

    echo " ".$marks."  ".$subject."\n"; 

} 

/* Looping through an array using for */

echo "\nLooping using for: \n"; 

$subject = array_keys($student_one); 

$marks = count($student_one);      

for($i=0; $i < $marks; ++$i) { 

    echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "\n"; 

} 



// Reverse Number

/*$num = 23456;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number of 23456 is: $revnum";  
*/
echo "<br>";

// Palindrome code
function palindrome($a){


$b = strrev($a);
if($a==$b){
    return "palindrome  $b";
}
else{
    return "not  $b";
}

}
 $c = palindrome(1331);
 echo $c;



// Prime Number or not

// $number = 3;
// $counter=0;
// for($i=1; $i<=$number; $i++){
//     if(($number%$i)==0){
//         $counter++;
//     }
// }
// if($counter<3){
//     echo "$number is a prime number";
// }
// else{
//     echo "$number is not prime";
// }

?> 