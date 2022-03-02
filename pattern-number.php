<!--
Program to print below format:
12345678
1234567
123456
12345
1234
123
12
1 
-->

<?php
$i;
$j;

for($i=8; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo"$j";
    }
    echo"<br>";
}

?>