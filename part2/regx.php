<?php

    $string = "{Birthday} = 1996-12-31";
    $string2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    $pattern = ["/(19|20)(\d{2})-(\d{2})-(\d{1,2})/i","/{(\w*)}\s=\s/i"];
    $replacement = ["$4-$3-$1$2","$1 ="];
    echo preg_replace($pattern,$replacement,$string);
    preg_match_all("/\d+-\d+-\d+/i",$string,$arr);
    print_r($arr);
    echo "</br> </br>";
    $pre = preg_split("/\s/i",$string2);
    echo "<pre>";
    print_r($pre);
    echo "</pre>";
?>