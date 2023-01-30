<?php

    class a{
        public static $name = "Sajjad Hossain";
        static function hey(){
            echo self::$name;
        }
        function __construct($n)
        {
            self::$name = $n;
        }
    }

 $ob = new a("raju");
 $ob->hey();

?>