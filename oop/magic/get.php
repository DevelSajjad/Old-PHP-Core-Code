<?php

    class a{
        public $name = "Sajjad";
        function __get($name)
        {
            echo "You accessing wrong property or private property";
        }
    }
     $obj = new a(0);
    echo $obj->name;

    class ar{
        private $data = ["name" => "Sajjad","age" => 27,"vill" => "Shampur"];
        function __get($key)
        {
            if(array_key_exists($key,$this->data)){
                return $this->data[$key];
            } else{
                echo "You accessing wrong property";
            }
        }
    }
    $obj = new ar(0);
    echo $obj->age;
?>