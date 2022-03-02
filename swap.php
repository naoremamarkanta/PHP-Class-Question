<!-- Write a program to swap two number in php. -->


<?php

$num1=2;
$num2=5;


echo"Before Swapping the value of num1: $num1 and num2: $num2" ; 
echo"<br>";
$num1=$num1+$num2;
$num2=$num1-$num2;
$num1=$num1-$num2;
echo"After Swapping the value of num1: $num1 and num2: $num2";

?>