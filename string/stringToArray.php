<?php
    $a = "I am Sajjad Hossain";
    
    $newArray = str_split($a, 3);
    print_r($newArray);
    $newArray = chunk_split($a, 4, '..');
    print_r($newArray);

    //UpperCase, LowerCase

    $newArray = strtolower($a);
    echo $newArray;
    $newArray = strtoupper($a);
    echo $newArray;
    $newArray = ucfirst($a);
    echo $newArray;

?>