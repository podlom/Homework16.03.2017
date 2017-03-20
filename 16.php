<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$i = 0;
foreach ($arr as $item){
    if ($i < 2){
       echo "{$item}, ";
        $i++;
    } else {
        $i = 0;
        echo "{$item}<br>";
    }
}
