<?php
for ($i=1; $i<=100 ; $i++) { 
    if($i%2==0){
        for ($j=1; $j <=10 ; $j++) { 
            echo "$i * $j =" . $i*$j."</br>";
        }
    }
}
?>