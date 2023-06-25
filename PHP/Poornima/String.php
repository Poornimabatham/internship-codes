
<?php
$string = "Apple is my favorite fruite.";  
$search = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');  
echo '<b>'."String before replacement:".'</br></b>';  
echo $string.'</br>';  
$newstr = str_replace($search, '', $string, $count);  
echo '<b>'."New replaced string is:".'</br></b>';  
echo $newstr.'</br>';  
echo 'Number of replacement ='.$count;  





?>