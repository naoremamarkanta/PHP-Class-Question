<!-- PHP program to find factors of a number using the while loop -->

<?php

$x = 20;
$i = 1;

echo "The factors of the  $x  are: ";

while ($i <= $x)
{
    if ($x % $i == 0)
    {
        echo $i . " ";
    }
    ++$i;
}

?>