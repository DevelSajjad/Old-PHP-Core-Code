<?php

    function __autoload($class){
        require "autoload/" .$class. ".php";
    }
    $obj =  new first();
    $obj1 = new second();

?>