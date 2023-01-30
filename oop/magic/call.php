<?php

    class abc{
        private $fname,$lname;
        private function show($f,$l){
            echo $this->fname = $f;
            echo $this->lname = $l;
        }
        function __call($method, $argu)
        {
            if(method_exists($this,$method)){
                call_user_func_array([$this,$method],$argu);
            } else{
                echo "You accessing privet or non existing method";
            }
            
        }
    }
$obj = new abc();
$obj->show("sajjad","Hossain");
echo "<pre>";
print_r($obj);
echo "</pre>";
?>