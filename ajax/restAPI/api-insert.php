<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Methods,Access-Control-Allow-Headers");
    $data = json_decode(file_get_contents("php://input"),true);
    $name = $data['name'];
    $age = $data['age'];
    $gender = $data['gender'];
    $country = $data['country'];
    $phone = $data['number'];
    $con = mysqli_connect("localhost","root","","student1") or die(mysqli_connect_error());
    $sql = "insert into sinfo(name,age,gender,country,phone) values('{$name}',{$age},'{$gender}','{$country}',{$phone}) ";
    if(mysqli_query($con, $sql)){
        echo json_encode(array("message" => "Data Save Successful","status" => true));
    }else{
        echo json_encode(array("message" => "Data Save Unsuccessful","status" => false));
    }

?>