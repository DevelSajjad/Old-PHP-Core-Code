<?php

$a = 7;
echo $a;
echo "<br/>";
echo $a+++$a++;
echo "<br/>";
echo $a;
echo "<br/>";
echo $a---$a--;
echo "<br/>";
echo $a;

echo "<br/>";
 function additional($array, $num) {
    echo $num. "<br/>";
    if($num <= 0 ) {
        return 0;
    } else {
        return additional($array, $num - 1) + $array[$num -1];
    }
}
echo additional([3, 4, 5], 1);

?>