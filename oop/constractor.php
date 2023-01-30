<?php

    class person{
        public $a,$b,$c;
        function __construct($a = 0,$b = 0)
        {
            $this->a = $a;
            $this->b =$b;
        }
        function show(){
          $add=  $this->c = $this->a + $this->b;
          return $add;
        }
    }
    $sum = new person(100,100);
    echo $sum->show();

?>