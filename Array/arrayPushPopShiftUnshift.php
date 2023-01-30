<?php
    //Array Push and Pop

    $array = [10,50,4,1];
    array_push($array, 10, 'Sajjad');
    echo "<pr>";
        print_r($array);
    echo "</pre> </br>";

    array_pop($array);

    echo "<pr>";
        print_r($array);
    echo "</pre> </br>";

    // Array Shift and Unshift.

    array_shift($array); // Remove array value in first col
    echo "<pr>";
        print_r($array);
    echo "</pre> </br>";

    array_unshift($array, 'Hello'); // Add array value in first col
    echo "<pr>";
        print_r($array);
    echo "</pre>";


?>