<?php
    include('database.php');
    $obj = new Database();
//    $obj->insert('info',['fname' => 'Hunnu','lname' => 'Hsan']);
//    print_r($obj->msg());
    
    // $obj->update('info',['fname' => 'abdullah'],"id = '23'");
    // print_r($obj->msg());
    // $obj->delete('info',"id = '23'");
    // print_r($obj->msg());
    // $obj->sql("select * from info");
    // print_r($obj->msg());
    $obj->select("info","*",null,null,null,2);
    $see = $obj->msg();
    // print_r($see);
    echo "<table border = '1px' width ='500px'>";
    foreach($see as list("id"=>$id,"fname"=>$fname,"lname"=>$lname)){
        echo "<tr> <td> $id</td> <td>$fname </td> <td>$lname </td> </tr>";
    }
    echo "</table>";
    $obj->pagi('info',null,null,2);
?>  