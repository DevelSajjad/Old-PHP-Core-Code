<?php

    class abc{
        function __construct()
        {
            echo "Hello Sajjad";
        }
        function __toString()
        {
            echo "You don't echo obj like string";
        }
    }

    $obj = new abc();
    echo $obj;
?>