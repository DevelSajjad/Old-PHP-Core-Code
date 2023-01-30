<?php

    class abc{
        public $name = "Sajjad";
        private $firstName,$lastName;
        function show($f,$l){
            $this->firstName = $f;
            $this->lastName = $l;
        }
        function __unset($name)
        {
            unset($this->$name);
        }
    }
$obj = new abc();
$obj->show("Sajjad","Hossain");
unset($obj->firstName);
print_r($obj);

?>