<?php

$a = ['red', 'green', 'yellow',1,8,6,45];

$slice = array_slice($a, 2, count($a));

echo "<pre>";
    print_r($slice);

echo "</pre>";

$b = [104, 75, 6];

$splice = array_splice($a, 3, 3, $b);


echo "<pre>";
    print_r($splice);

echo "</pre>";

?>