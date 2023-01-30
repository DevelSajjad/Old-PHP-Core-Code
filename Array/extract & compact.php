<?php

$color = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
$a = "sajjad";
$b = "raju";
$c = "helal";

$extra = ["mamun", "nasim"];

extract($color, EXTR_PREFIX_SAME, 'test'); // this function associative key make variable
echo $test_a;

$newArray = compact('a','b','c');

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>