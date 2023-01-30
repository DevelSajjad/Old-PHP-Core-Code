<?php
    // Foreach use for Array

    $rollNumber = [
        "Sajjad" => 104,
        "Labiba" => 1,
        "Monira" => 5

    ];
    foreach($rollNumber as $name) {
        echo $name. "</br>";
    }

    foreach($rollNumber as $key => $name) {
        echo $key. "</br>";
    }

?>