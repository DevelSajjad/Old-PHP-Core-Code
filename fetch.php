<?php
    $con = mysqli_connect("localhost","root","","crud")or die("Unsuccessful: ".mysqli_connect_errno());
    $sql = "select * from student";
    $result = mysqli_query($con,$sql) ;
    
    $row = mysqli_fetch_row($result);
    echo "<pre>";
        print_r($row);
    echo "</pre>";
    echo $row[4] . "</br>";
    
   
    $result1 = mysqli_query($con,$sql) or mysqli_error($con);
    $row1 = mysqli_fetch_assoc($result1);
    echo "<pre>";
        print_r($row1);
    echo "</pre>";
    echo $row1['phone'] . "</br>";

    $result3 = mysqli_query($con,$sql) or mysqli_error($con);
    $row3 = mysqli_fetch_array($result3);
    echo "<pre>";
        print_r($row3);
    echo "</pre>";
    echo $row3[4] . "</br>";

    $result4 = mysqli_query($con,$sql) or mysqli_error($con);
    $row4 = mysqli_fetch_all($result4, MYSQLI_ASSOC);
    echo "<pre>";
        print_r($row4);
    echo "</pre>";
    foreach($row4 as $value){
     echo $value['id']." ". $value['name']."</br>";
    }
?>