<?php

    include("/BITM/wamp/www/myproject/ajax/config.php");
    $eid = $_POST['edit']; 
    $sql = "select * from info where id = {$eid}";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $output = "<div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <div class='modal-body'>
              <form id='inputF'>
                    <input type='hidden' id='modalId' value='{$row['id']}'>
                    <input  type='text' id='modalfname'value='{$row['fname']}' >
                    <input  type='text' id='modallname'value='{$row['lname']}' >
                </form>
              </div>
              <div class='modal-footer'>
                <button id='save' type='button' class='btn btn-primary'>Save changes</button>
                <button id='close' type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
            </div>
          </div>
        </div>";
        }
        echo $output;
    }
?>