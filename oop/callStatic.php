<?php

    class abc{
        private static $name;
        private static function show($n){
            echo "hello".$n;
        }
        public static function __callStatic($method, $argu)
        {
            if(method_exists(__CLASS__,$method)){
                call_user_func_array([__CLASS__,$method],$argu);
            }else{
                echo "You Accessing private static method";
            }
        }
    }
abc::show("sajjad");

?>