<?php

    include("/BITM/wamp/www/myproject/ajax/config.php");
    $id = $_POST['id'];
    $sql = "delete from info where id = {$id}";
    if(mysqli_query($con, $sql)){
        echo 1;
    }else{
        echo 0;
    }

?>