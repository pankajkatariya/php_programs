<?php
//Swapping without using third variable
$a=10;
$b=20;

$a = $a+$b;
$b = $a-$b;
$a = $a-$b;
echo "Swap number a:".$a." b:".$b;

$a = $a*$b;
$b = $a/$b;
$a = $a/$b;
echo "Swap number a:".$a." b:".$b;