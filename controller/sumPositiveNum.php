<?php
$array=[-1,-20,30,100,110,200];
$total=array_sum(array_filter($array,function($num){
    return $num > 0;
}));
echo $total;
?>