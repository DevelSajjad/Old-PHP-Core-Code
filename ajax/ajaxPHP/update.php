<?php
    include("/BITM/wamp/www/myproject/ajax/config.php");
    $mid = $_POST['mdlid'];
    $fname = $_POST['mdlfname'];
    $lname = $_POST['mdllname'];
    $sql = "update info set fname = '{$fname}', lname = '{$lname}' where id = {$mid}";
    if(mysqli_query($con, $sql)){
        echo 1;
    }else{
        echo 0;
    }
?>