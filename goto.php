<?php
    for($i = 1; $i <= 10; $i++) {
        if($i == 5) {
            goto label;
        }
        echo $i."<br>";
    }
    label:
    echo "Here we use goto function. It call jump for another code"
?>