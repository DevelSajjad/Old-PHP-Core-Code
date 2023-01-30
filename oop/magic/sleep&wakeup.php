<?php

    class abc{
        private $fname,$lname,$fullname;
        function show($f,$l,$full){
            $this->fname = $f;
            $this->lname = $l;
            $this->fullname = $full;
        }
        function __sleep()
        {
            return array("fullname","fname","lname");
        }
        function __wakeup()
        {
            echo "data unserialize";
        }
    }
    $obj = new abc();
    $obj->show("sajjad","Hossain","Sajjad Hossain");
    $serial = serialize($obj);
    $us = unserialize($serial);
    echo "<pre>";

    print_r($serial);
    echo "</pre> <br>";
    echo "<pre>";

    print_r($us);
    echo "</pre> <br>";

?>