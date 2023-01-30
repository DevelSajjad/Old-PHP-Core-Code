
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $value1 = 10;
    $value2 = 15;
    $value3 = 120;
    $x = "sajjad";
    $y = array("Sajjad",45,"Raju");
    $sum = $value1 + $value3;
    echo "Value Is: ". $value1 + $value2;

    $info = <<<MYDATA

    Hi i am sajjad Hossain. "<b> $sum </b>"
MYDATA;

    echo $info;

    var_dump($y);
?>

</body>
</html>