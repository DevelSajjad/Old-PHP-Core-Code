<?php

    $con = new mysqli("localhost","root","","student1");
    if($con->connect_error){
        echo $con->connect_error;
    }
    $sql = "select * from info";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID ". $row['id']. " First Name ".$row['fname']." Last Name ".$row['lname']."</br>";
        }
    }

?>