<?php

    $mail = "sinigdho01@gmail.com,sajjad15-11902@diu.edu.bd";
    $sub = "hello";
    $msg = "hi i am here. do you know me? sorry do you remember me?";
    $header = [
        "From: ",
        "CC: ",
        "Bcc: "
    ];
    $headers = $header;
    if(mail($mail,$sub,$msg,$headers)){
        echo "mail sent";
    }else{
        echo "mail not sent";
    }


?>