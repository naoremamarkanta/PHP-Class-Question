<!--
Program to print below format:
***************
**************
*************
************
***********
**********
*********
********
*******
******
*****
****
***
**
* 
-->

<?php
$i;
$j;

for($i=1; $i<=15; $i++){
    for($j=15; $j>=$i; $j--){
        echo"*";
    }
    echo"<br>";
}

?>