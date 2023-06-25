<?php

$a = "poornima batham";
echo strlen($a);

echo $a[6];
echo "<br><br>";

 $search = "oo";
 $replace = "Hi";
 $newString = str_replace($search, $replace, $a);
 echo strrev($a);
 echo $newString;
//  pHirnima batham

echo "<br><br>";
$string = "HelloTroposal";
//  $search = "al";
//  echo strstr($string, $search);
//  echo "<br>";
//  echo strstr($string, $search,true);
//  echo "<br><br>";
 echo substr($string,6);


/* 
echo "$hello World";
echo "#hello world";
/*Warning: Undefined variable $hello in D:\xampp\htdocs\PHP\StringFunction.php on line 7
World#hello world*/ 

echo "<br><br>";
$a = "  welcome to the  world of coding";
echo trim($a)




?>