<?php

function sum($a = 5 , $b = 4) {
    echo "<h1>". $a + $b ."</h1>";
}

sum(10, 6);

// Return Function

function sumation($math, $eng, $sci) {
    $add = $math + $eng + $sci;
    return $add;
}

$total = sumation(50, 15, 10);

function percen($sum) {
    $per = $sum / 3;
    echo $sum.' = '. $per. "%";
}

percen($total);

function per($a, $b, $c) {
    $add = $a + $b + $c;
    $perc = $add / 3;
    return $perc;
}
$total = per(40 ,50, 56);
echo $total;
?>