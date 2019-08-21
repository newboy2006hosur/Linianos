<?php
    $Linio = [false,'Linio'];
    $It = [false,'IT'];
    $Linianos = [false,'Linianos'];
    for ($i = 1; $i <= 100; $i++) {
        ($echo = $Linianos[!($i%15)]) || ($echo = $Linio[!($i%3)]) || ($echo = $It[!($i%5)]) || $echo = $i;
        echo $echo . "\n";
    }
?>