<?php

    $file = "read.txt";
    
    

    if(file_exists($file)){
        echo readfile($file)."</br>";
        echo realpath($file)."</br>";
        echo basename($file)."</br>";
        copy($file, "old_read.txt");
        
        foreach(pathinfo($file) as $fil){
            echo $fil;
        }
    }else{
        echo "file not exist";
    }
    
    echo"</br>". substr(decoct(fileperms($file)),2);
    chmod($file,"0764");

?>