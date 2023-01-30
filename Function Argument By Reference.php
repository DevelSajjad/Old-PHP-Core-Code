<?php
// Passing by Value
function first($num) {
    $num += 10;
}

$number = 50;
first($number);
echo $number;

// Passing by Address

function second(&$num1) {
    $num1 += 10;
}
$number1 = 50;
second($number1);

echo $number1;  

?>