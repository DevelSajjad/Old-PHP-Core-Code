<?php 
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Methods,Access-Control-Allow-Headers");
    $data = json_decode(file_get_contents("php://input"),true);
    $fname = $data['fname'];
    $lname = $data['lname'];
    $vill = $data['vill'];
    include("/BITM/wamp/www/myproject/ajax/config.php");
    $sql = "insert into hey(fname,lname,village) values('{$fname}','{$lname}','{$vill}')";
    if(mysqli_query($con,$sql)){
        echo json_encode(array("message"=>"Save","Status"=>true));
    }else{
        echo json_encode(array("message"=>"Not Save","Status"=>false));
    }
?>