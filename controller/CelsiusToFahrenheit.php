<?php
$c = $_REQUEST['celsius']; 
$f = NULL; 
$f = (float)(($c * 9 / 5) + 32);
echo($c . " Celsius = " . $f . " Fahrenheit.");
?>