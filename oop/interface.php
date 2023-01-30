<?php

    interface parent1{
        function add($a,$b);
    }
    interface parent2{
        function sub($g,$j);
    }

    class child implements parent1, parent2{

        public function add($a,$c){
            echo $a + $c . '<br>';
        }
        public function sub($g,$j){
            echo $g - $j;
        }
    }

    $ob = new child();
    $ob->add(45,50);
    $ob->sub(50,60);
?>