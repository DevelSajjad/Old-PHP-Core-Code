<?php
    include("/BITM/wamp/www/myproject/ajax/config.php");
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $phone = $_POST['number'];
    $sql = "insert into sinfo(name, age, gender, country,phone) values('{$name}',{$age},'{$gender}','{$country}',{$phone})";
    $result = mysqli_query($con ,$sql) or  die(mysqli_error($con));
    if($result){
        echo "<h1> {$name} Your Data is save successful </h1>";
    }
?>