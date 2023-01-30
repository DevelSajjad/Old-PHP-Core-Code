<?php
    $x = 100; // Global Variable

    function test() {
        global $x; // Use Global Variable
        $y = 20; // Local Variable
        $x += $y;
        echo $x;
    }
    test();
?>