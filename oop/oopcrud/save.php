<?php
    include('database.php');
    $obj = new Database();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $save = $obj->insert('info',["fname"=>$fname,"lname"=>$lname]);
    if($save){
        echo "Data Save Successful";
        header("location: http://localhost/myproject/oop/oopcrud/indexx.php");
    }else{
        echo "Data Not Save";
    }
?>