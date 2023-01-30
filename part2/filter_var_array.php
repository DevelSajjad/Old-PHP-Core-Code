<?php
$array = [
    "num" => "01719041636",
    "age" => "25",
    "mail" => "sajjad15-11902@diu.edu.bd",
    "url" => "www.sajjad458.com"
];

$filter =[
    "num" => FILTER_SANITIZE_NUMBER_INT,
    "age" => [
        "filter" => FILTER_VALIDATE_INT,
        "options" =>[
            "min_range" => 15,
            "max_range" => 40
        ]
    ],
    "mail" => FILTER_SANITIZE_EMAIL,
    "url" => FILTER_SANITIZE_URL
];

foreach(filter_var_array($array, $filter) as $key => $val){
    echo $key ." => ". $val."</br>";
}

?>