<?php

    class set{
        private $name;
        function show(){
            echo $this->name;
        }
        function __get($name)
        {
            echo "you accessing wrong property or private ";
        }
        function __set($name, $value)
        {
            if(property_exists($this,$name)){
                $this->$name = $value;
            } else{
                echo "you set accessing wrong property or private ";
            }
            
        }
    }

$obj = new set();
$obj->name = "Sajjad Hossain";
$obj->show();
?>