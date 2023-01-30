<?php

    $str = "Hell0. Mahisha how are you my janu.";
    $strEnc = convert_uuencode($str);
    echo $strEnc;
    $strDeco = convert_uudecode($strEnc);
    echo $strDeco;
    $binary = bin2hex($str);
    echo $binary;
    echo hex2bin($binary);
    echo ord($str);

?>