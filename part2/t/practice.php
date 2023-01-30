<?php
    $file = "../read.txt";
    // echo decoct(fileperms($file));
    // chmod($file, "0764");

    // echo file_put_contents($file,"hello buddy",FILE_APPEND | LOCK_EX);
    // echo file_get_contents($file,false,null,50,100);
    // chdir("../");
    // $dir = getcwd();
    // echo "<pre>";

    // print_r(glob("*"))."</br>";

    // print_r(scandir($dir));
    // echo "</pre>";
    $dir = ("../");
    if(is_dir($dir)){
        if($open = opendir($dir)){
            while($ext = readdir($open)){
                echo $ext;
            }
        }
    }
    
?>