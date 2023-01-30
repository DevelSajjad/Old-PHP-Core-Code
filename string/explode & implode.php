<?php
    $a = ["this", 'is', 'mine', 'flower'];

    $b = "How are you guys";

    $newArray = implode(' ', $a); // Array to String
    echo $newArray;
    $newArray = explode(' ' , $b); // String to Array
    print_r($newArray);

?>