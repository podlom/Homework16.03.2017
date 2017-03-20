<?php
$rows = rand(1, 20);
$cols = rand(1, 20);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
?>
<table border="1">
    <?php for ($i = 0; $i <= $rows; $i++){?>
    <tr>
        <?php for ($j = 0; $j <= $cols; $j++){?><td bgcolor=<?= $colors[rand(0, 6)] ?>><?= rand(1, 100) ?></td> <?php } ?>
    </tr>
    <?php } ?>
</table>

