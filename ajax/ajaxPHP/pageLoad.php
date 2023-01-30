<?php

    include("/BITM/wamp/www/myproject/ajax/config.php");
    $limit = 3;
    if(isset($_POST['pageNum'])){
        $page = $_POST['pageNum'];
    }else{
        $page = 0;
    }
    $sql = "select * from info order by id limit {$page},$limit ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    if(mysqli_num_rows($result) > 0){
        $output = "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $output .= "<tr> 
                            <td> {$row['id']} </td>
                            <td> {$row['fname']} {$row['lname']} </td>
                        </tr>";
        }
        $output .= "</tbody>
                        <tbody id = 'pagination'>
                            <tr>
                                <td colspan = '2'> 
                                    <button id = 'btn' data-id='{$id}' class='btn btn-outline-dark'> Load More </button>
                                </td>
                            </tr>
                        </tbody>
                    ";
        echo $output;
    }

?>