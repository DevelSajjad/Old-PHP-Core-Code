<?php
    class abc{
        public $name;
        function __construct($n)
        {
            $this->name = $n;
        }
        function __invoke()
        {
             $this->name ;
        }
    }
$obj = new abc("Sajjad");
$obj();
?>