<?php
$arr = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
    'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
$month = 'Март';
foreach ($arr as $item){
    if ($item == $month){
        echo "<b> {$item}</b><br>";
    }else{
        echo "{$item}<br>";
    }
}