<?php
$f = $_REQUEST['fahrenheit'] ;
$c = (($f-32)*5)/9 ;
echo($f . " Fahrenheit = " . $c . " Celsius.");
?>