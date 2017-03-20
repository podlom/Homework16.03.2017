<?php
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(0, 100);
}
$a = 1;
echo "<pre>".print_r($arr, true)."</pre> Значения с непарными индексами: <br>";
foreach ($arr as $key => $item){
    if ($key%2 == 0 && $item > 0){
        $a *= $item;
    }
    if ($key%2 != 0 && $item > 0){
        echo "{$item}<br>";
    }
}
echo "Результат умножения значений с парными индексами: ".$a;