<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table th{
            border: 1px solid black;
            border-collapse:separate;
        }
    </style>
</head>
<body>
    
<?php
// $Name='om';
// $name='chauhan';
// $fullname='mr.om';
// echo $fullname;
// echo "<h1> $name </h1>";
// $arr=["a","b",10,"om",3.45,""];
// var_dump($arr);
// for($i=1;$i<=3;$i++)
// {
// 
// <!-- <input type="text" name="" id=""> -->
// <!-- 
// }
// 
// $x="hello";
// $x=NULL;
// var_dump($x);
// echo "<br>"
// $a=8;
// $b=9;
// echo($a + $b);
// echo "<br>";
// echo $a*$b;
// $x='hii';
// $y="om";
// $c="";
// $c = "$x "." $y";
// $c.="ubitech";
// echo $c; 
// $x=6;
// $y=9;
// echo $x <=> $y;
// $str="om";
// $str1="chauhan";
// echo "My name is $str $str1";
// echo "<br>";
// echo 'My name is $str $str1';
// $arr =[01,39,45,56,78];
// echo $arr;
// echo "<br>";
//  print $arr;
// echo "<br>";
// echo "<pre>";
// print_r ($arr);
// var_dump($arr);
// $a="om";
// $str="hello";
// print_r("hello $a");
// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "red", "d" => "yellow");  
// 
// print_r($x + $y); // union of $x and $y
// $x = array("a" => "red", "b" => "green");  
// $y = array("a" => "red", "b" => "green");  
// var_dump($x == $y);

// $x = array("a" => "red", "b" => "green");  
// $y = array("a" => "red", "b" => "green");  
// 
// var_dump($x != $y);
// echo $status = (empty($user)) ? "anonymous" : "logged in";
//    echo("<br>");
// 
//    $user = "John Doe";
//    if empty($user) = FALSE, set $status = "logged in"
//    echo $status = (empty($user)) ? "anonymous" : "logged in";
// echo $user = $_GET["user"] ?? "anonymous";
//    echo("<br>");
//   
//    variable $color is "red" if $color does not exist or is null
//    echo $color = $color ?? "red";

// $i=5;
// echo(++$i + ++$i - --$i + ++$i + $i++ - $i++);
// echo $i;
// $i='sara';
// echo 'My name is "$i"';

// $i=1;
// while($i<=10){
    // echo($i);
    // $i++;
// }

// for($i=1;$i<=10;$i++){
    // echo $i;
    // echo('&nbsp');
// }
// 
//  $x=1;
//  do{  echo "the no. is $x <br>";   
    // $x++;
//  }while($x<=10);

// $arr=["hi","hlo","hlw"];
// foreach($arr as $a){
    // echo $a;
    // echo '<br>';
// }
// $age = array("peter"=>"35", "Ben"=>"54","john"=>"78");
// echo '<pre>';
// print_r($age);
// foreach($age as $x => $val){
    // echo "$x = $val<br>";
// }
// for($x=0;$x<=5;$x++){
    // if($x == 4){
        // break;
    // }
    // echo "The number is: $x <br>";
// }
// echo "hello"; 

//...... star pattern1
// for($i=1;$i<=4;$i++){
    // for($j=1;$j<=4;$j++){
        // echo('*');
    // }
    // echo('<br>');
// }

// ....... star pattern2
// for($i=1;$i<=5;$i++){
    //  for($j=1;$j<=5-$i;$j++){
//    echo('&nbsp&nbsp');
//  }
//  for($k=1;$k<=2*$i-1;$k++){
//    echo('*');
//  }  
    //  echo('<br>');
//  }

// ......Star pattern3(Right-Triangle)
// for($i=0;$i<=5;$i++){
    // for($j=1;$j<=$i+1;$j++){
        // echo('*');
    // }
    // echo('<br>');
// }

//....... program to find max b/w two nos.
// $a=9;
// $b=40;
// if($a>$b){
    // echo('a is greater than b');
// }
// else{
    // echo('b is greater than a');
// }

//........ Program to find max b/w three nos.
// $a=8;
// $b=30;
// $c=60;
// if($a>$b && $a>$c){
    // echo('a is greater than b & c');
// }
// elseif($b>$a && $b>$c){
    // echo('b is greater than a and c');
// }
// else{
    // echo('c is greater');
// }

//........ Program to check whwther a no. is -ve,+ve or zero
// $a= 0;
// if($a==0){
    // echo('zero');
// }
// elseif($a>0){
    // echo('Positive');
// }
// else{
    // echo('Negative');
// }

//....... Program to check whether a no. is even or odd
// $x=8;
// if($x%2==0){
    // echo('Even');
// }
// else{
    // echo('Odd');


//..........Program to check whether a  no. is divisible by 5 & 11 or not
// $a=55;
// if($a%5==0 && $a%11==0){
    // echo('Divisble');
// }
// else{
    // echo('Not divisible');
// }

// .......Program to check leap year or not
// $year= 2019;
// if($year%4==0 && $year%100!=0 || $year%400==0){
    // echo('leap year');
// }
// else{
    // echo('not leap year');
// }

// .......Program to check whether a character is alphabet or not
// $char='5';
// if($char>='a' && $char<='z' || $char>='A' && $char<='Z'){
    // echo('Alphabet');
// }
// else{
    // echo('Not an Alphabet');
// }

// .....Program to check whether a alphabet is consonant or vowel
// $alpha='b';
// if($alpha=='a' || $alpha=='e' || $alpha=='i' || $alpha=='o' || $alpha=='u'){
    // echo('Vowel');
// } 
// else{
    // echo('Consonant');
// }

//  ......Program to check whether a character is alphabet digit or special character
//  $char ='8';
//  if($char>='a' && $char<='z' || $char>='A' && $char<='Z'){
//    echo('Alphabet');
//  }
// elseif($char>0 || $char<=9){
//   echo("Digit");
// }
//  else{
//    echo("Special Character");
//  }

// ......Program to display first 10 natural nos.
// for($i=1;$i<=10;$i++){
    // echo($i);
    // echo('<br>');
// }

// .....program to find sum of first 10 natural nos.
// $sum=0;
// for($i=1;$i<=10;$i++){
    // $sum= $sum+$i;
// }
// echo($sum);

// Program to display n terms and display their sum
// $term=11;
// $sum=0;
// for($i=1;$i<=$term;$i++){
    // $sum = $sum+$i;
// }
// echo($sum);

// .....Display an array's content in table
// $arr=['om','20','dd nagar'];

//
// function abc($a,$b,$c){
    // if($c == '+'){
    // $d= $a + $b;
    // return $d;
    // }
    // elseif($c == '-'){
        // $e = $a - $b;
        // return $e;
    // }
    // elseif($c == '*'){
        // $f= $a * $b;
        // return $f;
    // }
    // elseif($c == '/'){
        // $x = $a / $b;
        // return $x;
    // }
// } 
// echo abc(5,3,'+');
// echo('<br>');
// echo abc(5,2,'-');
// echo('<br>');
// echo abc(3,4,'*');
// echo("<br>");
// echo abc(6,2,'/');

$arr= ['om','20','ddnagar'];
echo $c = count($arr);

 

 <table> 
    <thead> 
        
        foreach($arr as $i){
            echo '<th>'.$i.'</th>';
        }
        
     </thead> 
     </table> 
// Associative Array

//  $arr = ["om"=>'20',"shivam"=>'21',"chunnu"=>'22'];
//  for($i=0;$i<=count($arr);$i++){
//    echo "key= " . $i . " ,value= "  . $i_value;
//    echo('<br>');
//  }

// Multidimension Array
// $arr= [   
    // array("om","20","dd"),
    // array("raj","21","morar"),
    // array("ram","22","hazira"),
// ];
// echo '<pre>';
// print_r($arr);
// for($i=0;$i<count($arr);$i++){
    // for($j=0;$j<count($arr[$i]);$j++){
        // echo $arr[$i][$j];
        // echo '<br>';
    // }
// }

// Array sorting functions
// $arr=[712,34,56,78,90,44];
// print_r($arr);
// echo('<br>');
// rsort($arr);
// print_r ($arr);
// echo('<br>');
// $arr1 = ["om"=>'25',"shivam"=>'21',"chunnu"=>'22'];
// arsort($arr1);
// print_r($arr1);

// $arr=[
//     array('abc','45','77'),
//     array('xyz','88','99'),
//     array('pqr','67','45')
// ];
//    echo '<  border: 1px solid black;
//    border-collapse: collapse;'
//    echo('<table>');
   
    
//     foreach($arr as $a){
//     echo("<tr>");
//     foreach($a as $x){
//     echo '<td>'.$x.'</td>';
//     }
// echo("</tr>");
//    }

// Call by refernce value
// function add(&$str2){
//     $str2 .= 'Call by refernce';
   
// }
// $str ='Hello';
// add($str);
// echo $str;

// function sayname($name='sonu'){
    // echo('Hello'. $name);
// }
// sayname('monu');

// function add(...$numbers){
    // echo '<pre>';
    // print_r($numbers);
    // $sum =0;
    // foreach($numbers as $n){
        // $sum += $n;
    // }
    // return $sum;
// }
// echo add(1,2,3,4);

// Recursion
// function display($number){
    // if($number<=5){
        // echo "$number <br>";
        // display($number+1);
    // }
// }
// display(1);

// $str = "Hello world. It's a beautiful day.";
// print_r (explode(" ",$str));

// $arr=[1,2,3,4];
// print_r(implode(" ",$arr)); 
 
?>
    <!-- <form action="new.php" method='POST' name="form"> 
        <label for="">Name</label>
        <input type="text" placeholder="Enter your Name" name="fname">
        <br>
        <br>
        <label for="">Password</label>
        <input type="password" name='password'>
        <br>
        <br>
        <label for="">Email</label>
        <input type="email" name="email"> 
        <br>
        <br>
        <label for="">Mobile</label>
        <input type="tel" name="mobile"> 
        <br>
        <br>
        <label for="">Gender</label>
        Male<input type="radio" name="gender" value="male">
        Female<input type="radio" name="gender" value="female">
        <br>
        <br>
        <label for="dob">Date of Birth </label>
        <input type="datetime" placeholder="dd/mm/yyyy" name="dob" id="dob">
        <br>
        <br>
        <label for="">Address:</label>
        <br>
        <textarea name="add" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        <label for="n">Nationality</label>
        <select name="nation" id="n">
            <option value="Indian">Indian</option>
            <option value="American">American</option>
            <option value="African">African</option>
            <option value="Russian">Russian</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Submit">
        
      </form>
      
      
      
</body>
</html>
 -->