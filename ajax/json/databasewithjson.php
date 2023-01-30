<?php
    $con = mysqli_connect("localhost","root","","student1") or die(mysqli_connect_error());
    $sql = "select * from sinfo";
    $query = mysqli_query($con, $sql) or die("unsuccessful");
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    
    $jsonData = json_encode($result, JSON_PRETTY_PRINT);
    $fileName = "my-". date("d/m/Y").".json";
    if(file_put_contents("jsonfile/{$fileName}",$jsonData)){
        echo "data create successful";
    }else{
        echo "Data Create Unsuccessful";
    }
?>