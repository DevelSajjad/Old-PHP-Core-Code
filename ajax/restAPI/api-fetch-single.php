<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    $data = json_decode(file_get_contents("php://input"),true);
    $id = $data['mid'];
    include("/BITM/wamp/www/myproject/ajax/config.php");
    $sql= "select * from sinfo where id = {$id}";
    $query = mysqli_query($con, $sql) or die("Unsuccessful ");
    if(mysqli_num_rows($query) > 0 ){
        $output = mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo json_encode($output);
    }else{
        echo json_encode(array("message"=> "No Record Here","Status" => false));
    }

?>