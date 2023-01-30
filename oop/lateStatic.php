<?php

class a {
    public static $name = "Ahmed";
    function hey(){
        echo static::$name;
    }
}
class b extends a{
    public static $name = "Sajjad";
}
$ob = new b();
$ob-> hey();

?>