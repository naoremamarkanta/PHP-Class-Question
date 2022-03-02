<!-- 
Program to print below format:
15913
261014
371115
481216
 -->

<?php

$number=4;
$i;
$j;
$x;

for($i=1; $i<=$number; $i++){
    $x=$i;
    for($j=1; $j<=$number; $j++){
        echo "$x";
        $x+=$number;
    }
    echo "<br>";
}

?>