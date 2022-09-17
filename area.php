
<?php
$side1=4;
$side2=3;
$side3=5;
$peri=($side1+$side2+$side3)/2;
$area=sqrt($peri*($peri-$side1)*($peri-$side2)*($peri-$side3));
echo $area;
?>
