<?php

//Reverse number
$num = 2456;
$rev = 0;

while($num>1){
    $rem = $num%10;
    $rev = ($rev*10) + $rem;
    $num = $num/10;
}
//echo $rev;

function reverse($number)  
{  
   /* writes number into string. */  
    $num = (string) $number;  
    /* Reverse the string. */  
    $revstr = strrev($num);  
    /* writes string into int. */  
    $reverse = (int) $revstr;   
     return $reverse;  
}  
echo reverse(23456);
//echo  strrev(23456);

$string = "windows";
$length = strlen($string);
for($i= ($length-1);$i >= 0;$i--){
 echo $string[$i];
}
