<?php
$a = "I am sajjad";
$b =strlen($a);
echo $b;
$b = str_word_count($a);
echo $b;

echo substr_count($a, 'a');// Search string. it is case sensitive.

echo stripos($a, 'AM');// search position
echo stristr($a, 'sajjad'); // search word or character it case insensitive

?>