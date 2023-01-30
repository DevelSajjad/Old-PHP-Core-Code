<?php

    echo "Today is: " .date('w');

    $date = date_create("2022-8-5");
    date_modify($date, '1 year');
    echo date_format($date,"d-m-y");
    $old = mktime(0,0,0,5,25,22);
    $date= getdate($old);
    echo "<pre>";
    print_r($date);
    echo "</pre>";

    echo $date['month'];

    $date = date_create("2022-8-6");
    date_time_set($date, 11,53);
    echo date_format($date,'d-m-Y H:i:s');

?>