<?php

    class a{
        public $name = "sajjad"; // Property Overriding
        
        function sum($a,$b){ //Method Overriding
            return $a + $b;
        }
    }
    class b{
        public $name = "hossain"; //Property Overriding
        function sum($a,$b){  //Method Overriding
            return $a - $b;
        }
    }
$ob = new a();
echo $ob->name." ";
echo $ob->sum(10,20);
$obj = new b();
echo $obj->name." ";
echo $obj->sum(50,10);
?>