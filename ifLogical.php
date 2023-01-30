<?php
$age = 18;

    if ($age >= 18 && $age <= 25) {
        echo "Your are eligable </br>";
    }
    if (!($age <=17)) {
        echo "This is not operator. </br>";
    }

    if ($age >= 18 xor $age <= 15 ) {
        echo "This is xor operator. If one condition is false that will be truth.";
    }
?>