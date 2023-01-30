<?php

    include("/BITM/wamp/www/myproject/ajax/config.php");
    $sql = "select * from sinfo";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $output = json_encode($result, JSON_PRETTY_PRINT);
    $fileName = "my-" . date("d-m-Y"). ".json";
    if(file_put_contents("json/{$fileName}",$output)){
        echo $fileName."File Create Success";

    }else{
        echo "unsuccess";
    }
?>