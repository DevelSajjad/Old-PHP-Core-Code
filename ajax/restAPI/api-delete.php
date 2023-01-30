<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Methods,Access-Control-Allow-Headers,Authorization, X-Request-with");
    $data = json_decode(file_get_contents("php://input"),true);
    $id =$data['sid'];
    include("/BITM/wamp/www/myproject/ajax/config.php");
    $sql = "delete from sinfo where id = {$id}";
    if(mysqli_query($con,$sql)){
        echo json_encode(array("message" => "Delete Successful" , "status" => true));
    }else{
        echo json_encode(array('message'=> 'Delete Unsuccessful','status'=> false));
    }

?>