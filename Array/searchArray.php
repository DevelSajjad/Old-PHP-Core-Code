<?php
$marks = [
    "Krishna" => [
        "Physics" => 75,
        "Math"    => 70,
        "Eng"     => 60
    ],
    "Sajjad" => [
        "Physics" => 55,
        "Math"    => 60,
        "Eng"     => 80
    ],

    "Mamun" => [
        "Physics" => "uu",
        "Math"    => 90,
        "Eng"     => 50
    ]
];

$cars = [10,50,60,40,'Sajjad'];

echo in_array("Sajjad", $cars);
echo array_search(40,  $cars);

array_walk_recursive($marks, function(&$value) {
    
    if (is_int($value) ) {
        
        ++$value;
    }
});
var_dump($marks);
// First process
$a = 4;
$value = "ODD";
if ($a % 2 == 0) {
    $value = "EVEN";
} 
echo $value;

// Second process

function check($value) {
    if ($value % 2) {
        return 'Even';
    }
    return 'Odd';
}
$b = 5;
echo check($a);

echo "<br>";

// Without codition

$c = 9;
$arr = ['Even', 'Odd'];
echo $arr[$c % 2];


?>