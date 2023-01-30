<?php
    $grade = 1001;
    switch (true) {
        case ($grade >= 80 && $grade <= 100):
            echo "Merit";
            break;
        case ($grade >= 60 && $grade <= 79):
            echo "1st Division";
            break;
        case ($grade >= 45 && $grade <= 59):
            echo "2nd Division";
            break;
        case ($grade >= 33 && $grade <= 44):
            echo "3rd Division";
            break;
        case ($grade < 33):
            echo "Failed";
            
        default:
            echo "Enter Your correct marks";
    }
?>