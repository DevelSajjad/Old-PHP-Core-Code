<?php

    $a = "Hell'o I am Her'e";

    $c= addslashes($a);
    echo $c;
    echo stripslashes($c);
    $x = "I am Sajjad Hossain";
    echo addcslashes($x, "a..h");

    echo stripcslashes($x);
?>