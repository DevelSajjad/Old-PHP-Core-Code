<?php
$array =['White', 'Black','Blue','Green','Red','Yellow','Orange','Sky Blue'];
$v = array_rand($array, 5);
foreach($v as $v1) {
    echo $array[$v1].' ';
}
echo '</br>';
shuffle($array);
print_r($array);

?>