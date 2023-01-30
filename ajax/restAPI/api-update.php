<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Methods,Access-Control-Allow-Headers,Authorization, X-Requested-with");
    $data = json_decode(file_get_contents("php://input"),true);
    $id = $data['mid'];
    $name = $data['mname'];
    $age = $data['mage'];
    $gender = $data['mgender'];
    $country = $data['mcountry'];
    $phone = $data['mnumber'];
    include('/BITM/wamp/www/myproject/ajax/config.php');
    $sql = "update sinfo set name = '{$name}',age = {$age},gender = '{$gender}',country = '{$country}',phone = {$phone} where id = {$id}";
    if(mysqli_query($con, $sql)){
        echo json_encode(array("message" => "Data Update Successful","Status" => true));
    }else{
        echo json_encode(array("message"=> "Data Update Unsuccessful","Status"=> false));
    }
?>