<?php
$c = 0;
if (array_key_exists("numb", $_POST)){
    foreach (str_split($_POST['numb']) as $item){
        $c += $item;
    }
}
?>
<form method="post" action="23.php">
    Число: <input type="number" name="numb">
    <input type="submit" value="Ок">
</form>
<br><br>
Сумма цифра: <?= $c ?>
