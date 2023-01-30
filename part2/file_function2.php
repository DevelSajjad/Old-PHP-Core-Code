<?php

    if(is_dir("t")){
        echo "Yes File";
    }else{
        echo "NO";
    }

    $file = fopen("read.txt", "r");

    // echo fread($file,filesize("readme.txt"))."</br>";
    // echo fgets($file);
    // echo ftell($file);
    // fseek($file,20);
    // echo fgets($file);
    // ftell($file);
    // echo fgets($file);
    // echo ftell($file);
    // echo fpassthru($file);
    // echo fgets($file);
    // echo ftell($file);
    // rewind($file);
    // echo fgets($file);
    echo "</br> </br> </br>";
    while(! feof($file)){
        $line = fgets($file);
        echo $line."</br>";
    }

$file1 = fopen("read.txt","a+");
fputs($file1,"\nHi i am sinigdho. here we");
    
?>