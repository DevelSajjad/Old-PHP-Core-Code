<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Methods,Access-Control-Allow-Headers,Authorization,X-Request-with");
    // $data = json_decode(file_get_contents("php://input"),true);

    $search = isset($_GET["search"]) ? $_GET["search"] : die();
    include("/BITM/wamp/www/myproject/ajax/config.php");
    $sql = "select * from sinfo where name like '%{$search}%'";
    $que = mysqli_query($con, $sql) or die("Unsuccessful");
    if(mysqli_num_rows($que) > 0){
        $output = mysqli_fetch_all($que,MYSQLI_ASSOC);
        echo json_encode($output);
    }else{
        echo json_encode(array("message"=> "Record not here","status"=> false));
    }

?>