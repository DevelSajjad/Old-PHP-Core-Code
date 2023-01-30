<?php

// Encrypted Password Generate
//Md5 and Sha1
$pass = "hello";
echo "Md5 Password: ". md5($pass, true);
// Md5 better then sha1
echo "Sha1 Password: ". sha1($pass);

if(md5($pass) === '5d41402abc4b2a76b9719d911017c592'){
    echo 'hello';

}




?>