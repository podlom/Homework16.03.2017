<?php
$arr = [];
for ($i = 0; $i < 10; $i++){
    $arr[] = rand(0, 100);
}
$arr = array_unique($arr);
echo "<pre>".print_r($arr, true)."</pre>";
$a = min($arr);
$b = max($arr);
echo "Min: ".$a. "; Max: ".$b;
$c = array_search($a, $arr);
$d = array_search($b, $arr);
$arr[$c] = $b;
$arr[$d] = $a;
echo "<pre>".print_r($arr, true)."</pre>";