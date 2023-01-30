<?php
    $car1 = ["Honda", "Suzuki",  "Audui",  "Bajaj"];

    $car2 = ["Bugati", "Rolls"];

    $newArray = array_replace($car1, $car2);

    echo "<pre>";
        print_r($newArray);
    echo "</pre>";

    $marks = [
         [
            "Physics" => 75,
            "Math"    => 70,
            "Eng"     => 60
        ],
         [
            "Physics" => 55,
            "Math"    => 60,
            "Eng"     => 80
        ]
    ];

    $marks1 = [
         [
            "Physics" => 0,
            "Math"    => 40,
            "Eng"     => 10
        ],
         [
            "Physics" => 0,
            "Math"    => 60,
            "Eng"     => 50
        ],
    
       
    ]; 
    $newArray1 = array_replace_recursive($marks, $marks1);
    echo "<pre>";
    print_r($newArray1);
echo "</pre>";
?>