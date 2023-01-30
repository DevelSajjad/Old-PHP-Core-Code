<?php
    // Constant Variable

    // define("num", 600, true);

    // echo num;
   
    class Test {
        public function func() {
            echo "Class A";
        }   
        public function product($name = null, $sku = null) 
        {
            echo $name . ': ' . $sku;
        }
    }
    class B {
        public static $refer = 'Test';
        public static function __callStatic($name, $arguments)
        {
            $obj = new static::$refer();
            $obj->$name(...$arguments);
        }
    }

    B::product('Mobile', 'SAM-31');
    B::funcs();
  

?>