<?php
    $num = [1,2,4,6,7];
    $color = ['red','green', 'yellow'];

    $newArray = array_merge($num, $color);
    echo "<pre>";
        print_r($newArray);

    echo "</pre> </br>";

    $num = [1,2,"a" => 4,6,7];
    $color = ["a" => 'red',"b" => 'green', "c" => 'yellow'];

    $newArray = array_merge($num, $color);
    echo "<pre>";
        print_r($newArray);

    echo "</pre> </br>";

    $num = [1,2,"a" => 4,6,7];
    $color = ["a" => 'red',"b" => 
    [
        "green" => 'bd',
        "red"   => 'bd1' 
    ]
    
    , "c" => 'yellow'];

    $newArray = array_merge_recursive($num, $color);
    echo "<pre>";
        print_r($newArray);

    echo "</pre> </br>";

    
?>