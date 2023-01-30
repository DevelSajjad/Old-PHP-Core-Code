<?php

    class abc{
        public $fullname;
        private $firstName,$lastName;
        private $data = ["name" => "Sajjad","Age" => 27,"vill" => "Shampur"];
        function show($fn,$ln){
            $this->firstName = $fn;
            $this->lastName = $ln;
            $this->fullname = "Sajjad Hossain";
        }
        function __isset($age)
        {
            echo isset($this->data[$age]);
        }
    }
$obj = new abc();
$obj->show("Sajjad","Hossain");
echo isset($obj->firstName);
echo isset($obj->fullname);
echo isset($obj->Age);
?>