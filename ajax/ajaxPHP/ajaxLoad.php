<?php

    $con = mysqli_connect("localhost","root","","student1") or die(mysqli_connect_error());
    $limit = 3;
    $page = "";
    if(isset($_POST['page_id'])){
        $page = $_POST['page_id'];
    }else{
        $page = 1;
    }
    $offset = ($page - 1) * $limit; 
    $sql = "select * from info limit  {$offset},{$limit}";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    if(mysqli_num_rows($result) > 0){
        $output = "<table class='table table-bordered text-center'> <tr> <th> ID </th> <th> Full Name </th> <th> Edit </th> <th class='text-danger'> Delete </th> </tr>";
        while($row = mysqli_fetch_assoc($result)){
            $output.= "<tr> <td> {$row['id']} </td> <td> {$row['fname']} {$row['lname']} </td> <td> <button class='btn btn-secondary' id='edit' data-eid='{$row['id']}'> Edit </button> </td> <td> <button data-id='{$row['id']}' id ='btn' class='btn btn-danger'> Delete </button> </td> </tr>";
        }
        $output.= "</table>";
        $sql1 = "select * from info";
        $result1 = mysqli_query($con, $sql1) or die("Unsuccessful");
        $totalNum = mysqli_num_rows($result1);
        $totaPage = ceil($totalNum / $limit);
        for($i=1; $i <= $totaPage; $i++){
            $output.= " <div id='pagination' class='text-center'>
             <a class='active btn btn-dark' href='' id='{$i}'>{$i}</a>
                </div>";
        }
        echo $output;
        
    }else{
        echo "<h1 class='text-center'> No Record Here </h1>";
    }

?>