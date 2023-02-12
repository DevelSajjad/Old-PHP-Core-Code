<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"> </br> </br>
        <input type="submit">
//sajjad

    </form>
    <?php
        if(isset($_FILES['image'])){
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"upload-file/".$file_name);
        }
    ?>
</body>
</html>
