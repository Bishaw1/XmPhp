<?php
$array=['hellow','bangladesh','ramadan','eid'];
$newArr=[];
foreach($array as $value){
    $str=substr($value,-1);
    array_push($newArr,$str);
}
print_r($newArr);
?>