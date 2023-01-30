<?php
    // Multidimension Array
    $emp = [
        [1, "Krishna", "Salesman",15000],
        [2, "Sajjad", "Software.D", 25000],
        [3, "Raju", "Assistant", 12000]
    ];
    echo "<table border = '3px' cellpadding = '10px'>";
    foreach($emp as $v1) {
        echo "<tr>";
        foreach($v1 as $v2) {
            echo "<td>". $v2. "</td>";
        }
        
        echo "</tr>";
    }
    echo "</table>";

    // Multidimension Associative Array

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
    echo "<table border = '5px' cellpadding = '10px'>";
    foreach($marks as $key => $count) {
        echo "<tr>";
        echo "<td>". $key. "</td>";
        foreach($count as $key => $counter) {
            // echo "<td>". $key. "</td>";
            echo "<td>".$key. $counter. "</td>";        
        }
        echo "</tr>";
    }
    echo "</table>";

?>