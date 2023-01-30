<?php

use child as GlobalChild;

    trait all{
        function hi(){
            echo "Hi EveryOne";
        }
        function bye(){
            echo "Bye EveryOne </br>";
        }
    }
    class a{
        use all;
    }
$ob = new a(0);
$ob->hi();
$ob->bye(); 
// Trait Overriding
trait hi{
   private function hello(){
        echo "Hello Trait 1";
    }
}
trait hell{
    function hello(){
        echo "Hello Trait 2";
    }
}

class base {
    function hello(){
        echo "Hello Base";
    }
}
class child extends base{
    use hi{
        hi::hello as public;
    }
    // function hello()
    // {
    //     echo "Hello Child";
    // }
}
$ob = new child();
$ob->hello();

class more{
    use hi,hell{
        hell:: hello insteadof hi;
        hi:: hello as public newHello;
        
        
    }
}
$ob= new more();
$ob->hello();
$ob->newHello();


?>