<?php
    class abc{
        function a(){
            echo "A";
            return $this;
        }
        function b(){
            echo " B";
            return $this;
        }
        function c(){
            echo "C";
        }
    }
    $obj = new abc();
    $obj->a()->b()->c();

?>