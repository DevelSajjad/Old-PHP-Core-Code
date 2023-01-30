<?php
    $a =['a' => 4, 'b' => 'Sajjad', 'c' => 5, 'd' => 7];
    $b =['h' => 4, 'b' => 'Sajjad', 'd' => 5, 'c' => 10];
$match = array_intersect($a,$b); // Match only value
$matchKey = array_intersect_key($a,$b); // Match only key
$matchKeyA = array_intersect_assoc($a,$b); // Match key and value

print_r($match);
print_r($matchKey);
print_r($matchKeyA);
echo '</br>'. '</br>';
// Difference

$diff = array_diff($a, $b);
print_r($diff); 
echo '</br>';
$diffKey = array_diff_key($a, $b);
print_r($diffKey);
echo '</br>';
$diffKeyValue = array_diff_assoc($a, $b);
print_r($diffKeyValue);

echo '</br>';
function compare($a,  $b) {
    if($a === $b) {
        return 0;
    }
    return($a > $b? 1 : -1);
}

$newArray = array_diff_uassoc($a, $b, 'compare');
print_r($newArray);

?>