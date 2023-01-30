<?php
    $con = mysqli_connect("localhost","root","","student1") or die(mysqli_connect_error());
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sql = "insert into info(fname,lname) values('{$fname}','{$lname}')";
    if(mysqli_query($con, $sql)){
        echo 1;
    }else{
        echo 0;
    }

?>