<!-- write a program to find hcf of two numbers in php -->

<?php
$num1 = 500;
$num2 = 100;

if ($num1 > $num2) {
    $num1=$num1+$num2;
    $num2=$num1-$num2;
    $num1=$num1-$num2;
}

for($i = 1; $i < ($num1+1); $i++) 
{
  if ($num1%$i == 0 && $num2%$i == 0)
    $hcf = $i;
}

echo "HCF of $num1 and $num2 is: $hcf";
?>
