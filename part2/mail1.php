
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        Email: <input type="mail" name="email" value="">
        Subject: <input type="text" name="subject" value="">
        Message: </br></br>
        <textarea name="msg" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>
</html> 
<?php

    
    if(isset($_POST['btn'])){
   echo $mail = $_POST['email'];
   echo $sub = $_POST['subject'];
   echo $msg = $_POST['msg'];
   echo $header = "From: {$_POST['email']}";

        if(mail($mail,$sub,$msg,$header)){
            echo "mail sent";
        }else{
            echo "mail unsent";
        }
    }

?>
