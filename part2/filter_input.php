<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Input</title>
</head>
<body>
    <form action="" method="POST">
        Email: <input type="text" name="mark" autocomplete="off"></br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        $arr = [
            "options" =>[
                "min_range" => 33,
                "max_range" => 100
            ]
        ];
        if(isset($_REQUEST['submit'])){
            if(filter_input(INPUT_POST,'mark',FILTER_VALIDATE_INT,$arr)){
                echo "Mark is valid ".$_REQUEST['mark'];
            }else{
                echo "Mark is not valid";
            }
        }
    ?>
</body>
</html>