<?php

//     abstract class a {
//         abstract protected function cal($b,$c);
//     }

//     class d extends a{
//         function cal($a,$d){
//             echo $a + $d;
//         }
//     }
// $ob = new d();
// $ob->cal(41,15)

abstract class a{
    protected $name;
    abstract protected function sum($a,$b);
}
class b extends a{
    function sum($a,$n){
        echo $a + $n;
    }
}
$on = new b();
$on->sum(45,5);
?>