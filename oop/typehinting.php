<?php


    function cal(int $a){
        return $a + 5;
    }

    echo cal(6);

    function ar(array $a){
        foreach($a as $val){
            echo $val;
        }
    }
    $test = ["Sajjad", "Hossain"];
    ar($test);
    class a{
        function name($a){
            echo $a;
        }
    }
    class b{
        function age($a){
            echo $a;
        }
    }
   function w(a $c){
    $c->name("Helio");
   }
   $t = new a();
   w($t);
   class getName{
    function Name(student $name){
        foreach ($name->names() as $val){
            echo $val;
        }
    }
   }
   class student{
    function names(){
    return ["Sajjad","Belal","Raju"];
    }
   }
   class lib{

   }
$get = new getName();
$stu = new student();
$li = new lib();
$get->Name($stu);

?>