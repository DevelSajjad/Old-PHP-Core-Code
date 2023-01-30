<?php

    class calculation
    {
        public $a,$b,$c;
        function sum(){
            $this->c = $this->a + $this->b;
            return $this->c;
        }
        function sub(){
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }

    $cal = new calculation();
    $cal->a = 30;
    $cal->b = 40;
    echo $cal->sum()."<br>";
    echo $cal->sub(); 
    

?>