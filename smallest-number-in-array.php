<?php
$numbers = array(17,40,22,19,54);
$length = count($numbers);
$min = $numbers[0];
for($i=1;$i<$length;$i++)
{
if($numbers[$i]<$min)
{
$min=$numbers[$i];
}
}
echo "The smallest number is ".$min;
?>