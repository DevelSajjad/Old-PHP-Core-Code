<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">    
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Age</label>
        <input type="number" name="age">
        <input type="submit" name="save" value="Submit">

    </form>
    <?php
        if(isset($_POST['save'])){
            echo $_POST['name'];
            echo $_POST['age'];
        }

        session_start();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['age']  =  $_POST['age'];
        echo $_SESSION['name'];
    ?>
</body>
</html>l