<?php
    include("/BITM/wamp/www/myproject/ajax/config.php");
    $sql = "select * from sinfo ";
    $query = mysqli_query($con, $sql) or die( mysqli_error($con));
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $json = json_encode($result);
    echo $json;
?>