<?php
    $marks = [
        'h' => 4, 'b' => 'Sajjad', 'd' => 5, 'c' => 10, 'e' => 5
    ];

    $newArray = array_unique($marks);
    echo '<pre>';
    print_r($newArray);
    echo '</pre>';

    $newArray = array_values($marks);
    echo '<pre>';
        print_r($newArray);
        echo '</pre>';
?>