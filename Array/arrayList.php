<?php

$emp = [
    [1, "Krishna", "Salesman",15000],
    [2, "Sajjad", "Software.D", 25000],
    [3, "Raju", "Assistant", 12000]
];
echo "<table border = 5px>";
foreach($emp as list($num, $name, $desig, $salary)) {
    echo "<tr>";
    echo "<td>". $num. "</td>"."<td>". $name."</td>" ."<td>". $desig. "</td>". "<td>". $salary . "</td>";
    echo "</tr>";
}
echo "</table>";

// Associative Array
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
        "Physics" => 75,
        "Math"    => 90,
        "Eng"     => 50
    ]
];
echo "<table>";
    foreach($marks as list("Physics" => $physics,"Math" => $math, "Eng" => $eng)) {
        echo "<tr>";
            echo "<td>". $physics. "</td>". "<td>". $math. "</td>". "<td>".$eng."</td>";

        echo "</tr>";
    }

echo "</table>";
$len = count($marks);
for($i = 0; $i < $len; $i++) {
    echo $marks[$i];
}
?>