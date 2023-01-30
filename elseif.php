<?php
    $grade = -1;
    if ($grade >= 80 && $grade <= 100) {
        echo "Merit";
    }elseif ($grade >= 60 && $grade <=79 ) {
        echo "1st Division";
    }elseif ($grade >= 45 && $grade <= 59) {
        echo "2nd Division";
    }elseif ($grade >= 33 && $grade <= 44) {
        echo "3rd Division";
    }elseif ($grade < 33) {
        echo "Failed";
    }else {
        echo "Please Enter Your 0 to 100 Marks";
    }

?>