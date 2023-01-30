<?php
    $mail = "sin ig dho01@gmail.com";
    var_dump($mail);
    $mail = filter_var($mail,FILTER_SANITIZE_EMAIL);
    if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
        echo "email valid".$mail;
    }else{
        echo "email not valid";
    }

    // Validation & Sanitization URL only remove space
    $url = "https://www.w 3 sc h ools.com/php/php_form_url_email.asp";
    $url = filter_var($url, FILTER_SANITIZE_URL);
    if(filter_var($url, FILTER_VALIDATE_URL)){
        echo $url."url validation";
    }else{
        echo "url not validaton";
    }

    //Number
    $num = "10,000";
    $num = filter_var($num,FILTER_SANITIZE_NUMBER_INT);
    if(filter_var($num,FILTER_VALIDATE_INT)){
        echo "num valid </br> ".$num;
    }
    // Float
    $flt = "1,50,000";
    $flt1 = "10e";
    $flt = filter_var($flt1,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_SCIENTIFIC);
    if(filter_var($flt1,FILTER_VALIDATE_FLOAT)){
        echo "float valid".$flt;
        echo "float valid".$flt1;
    }else{
        echo "float is not valid". $flt;
        echo "float is not valid". $flt1;
    }
    // Magic Quotes
    $quo = "sajj''ad Hossain";
    $quo = filter_var($quo, FILTER_SANITIZE_ENCODED);

?>