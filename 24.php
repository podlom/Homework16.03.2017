<?php
$c = 0;
if (!empty($_POST)){
    $a = $_POST["digit"];
    foreach (str_split($_POST['numb']) as $item){
        if ($item == $a){
            $c++;
        }
    }
}
?>
<form method="post" action="24.php">
    Число: <input type="number" name="numb"><br>
    Цифра: <input type="number" name="digit"><br>
    <input type="submit" value="Ок">
</form>
<br><br>
Количество вхождений цифры в число: <?= $c ?>
