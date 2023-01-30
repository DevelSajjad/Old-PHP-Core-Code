<?php

    $dir = getcwd();
    if(is_dir($dir)){
        if($open = opendir($dir)){
            while($read = readdir($open)){
                echo ($read);
            }
        }
    }

?>