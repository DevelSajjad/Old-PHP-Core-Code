<?php
    include("/BITM/wamp/www/myproject/ajax/config.php");
    $search = $_POST['search'];
    $sql = "select * from info where fname like '%{$search}%' or lname like '%{$search}%' order by id ";
    $result = mysqli_query($con,$sql) or die(mysqli_error($con));
    if(mysqli_num_rows($result) > 0){
        $output = "<table class='table table-bordered text-center'> <tr> <th> ID </th> <th> Full Name </th> <th> Edit </th> <th class='text-danger'> Delete </th> </tr>";
        while($row = mysqli_fetch_assoc($result)){
            $output.= "<tr> <td> {$row['id']} </td> <td> {$row['fname']} {$row['lname']} </td> <td> <button class='btn btn-secondary' id='edit' data-eid='{$row['id']}'> Edit </button> </td> <td> <button data-id='{$row['id']}' id ='btn' class='btn btn-danger'> Delete </button> </td> </tr>";
        }
        $output.= "</table>";
        echo $output;
    }else{
        echo "<h1 class='text-center'> {$search} Record Not Here </h1>";
    }
?>