<?php
function myFunction($n, $m) {
    return "$n = $m";
}
$a = [4,8,6,0,4,63,7];
$b = ['Sajjad','radio','audio','raju'];
$newA = array_map('myFunction', $a, $b);

echo '<pre>';
print_r($newA);
echo '</pre>';

?>