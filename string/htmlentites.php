<?php


$b = "i <a>am sajjad</a>";
$htmll= htmlentities($b);
echo $htmll;
$html = html_entity_decode($htmll);
echo $html;

?>