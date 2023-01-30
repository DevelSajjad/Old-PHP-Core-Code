<?php
    $file = "old_read.txt";

    // file_put_contents($file,"\nHi i am here.",FILE_APPEND | LOCK_EX);

    echo file_get_contents($file,false,null,10,50);
    echo "<pre>";
     print_r(glob("{s*},{*php}",GLOB_BRACE));
    echo "</pre>";
    echo getcwd();
    chdir("t");
    echo getcwd();
    $dir = "./";
    print_r (scandir($dir));

?>