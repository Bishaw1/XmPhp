<?php
$tem="30,20,15,46,27,28,26,25,32,33,21,22,25,40,12";
$arr=(explode(",",$tem));
$average=array_sum($arr)/ count($arr);
echo($average);
?>