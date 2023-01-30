<?php
$colors = ["red","white",10,50];
echo "<pre>";
print_r($colors);
echo "</pre>";
echo $colors[1] . "</br>";

$colors[1] = "green"; // Change Array Value

for($i = 0; $i < 4; $i++) {
    echo "<pre>";
    echo ($colors[$i])."</br>";
    echo "</pre";
}

// Associate Array
$bikes = [
    "Suzuki" => "Gixxer Sf",
    "Honda" =>  "X-Blade",
    "Bajaj" => "Pulser"
];
var_dump($bikes);

echo $bikes["Honda"];

?>