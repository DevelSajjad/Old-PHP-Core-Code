<?php
// Document Here
echo <<<Mydata
    Hello buddy. How are You;
Mydata;
$value = 450;
$value1 = 320;
$sum = $value + $value1;
$info = <<<Mydataa
   i am here buddy. 
   my calculation is "<b> $sum </b>"
   
Mydataa;

echo $info;


?>