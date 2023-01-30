<?php

  $var = 1;
  $array = ["options" =>
                [
                    "min_range" => 10,
                    "max_range" => 50
                ]  
];
if(filter_var($var,FILTER_VALIDATE_INT,$array) || filter_var($var,FILTER_VALIDATE_INT) == 0){
    echo $var." is integer";
}else{
    echo $var." is not integer </br>";
}
$mail = "sinigdho01@gmail.com";
if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
    echo "mail validation";
}else{
    echo "mail not validatioin";
}
$url = "https://www.w3schools.com/test/page.php?i=1";
if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
    echo "URL Validation";
}else{
    echo "URL is not validation";
}

?>