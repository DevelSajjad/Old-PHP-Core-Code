<?php
// Recursive Function

function re($num) {
    if($num <= 5) {
        echo $num. "</br>";
        re($num++);
    }
} 
re(1);

//Factorial Number with Recursive Function

// function factorial($n) {
//     if($n == 0){
//         return 1;
//     }else{
//        return ($n * factorial($n - 1));
//     }
// }

// echo factorial(5);

?>