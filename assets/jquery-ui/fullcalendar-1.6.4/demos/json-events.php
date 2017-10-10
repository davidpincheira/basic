<?php

$year = date('Y');
$month = date('m');

echo json_encode(array(
    array(
        'id' => 111,
        'title' => "Event1",
        'start' => "$year-$month-10 10:00",
        'url' => "http://yahoo.com/"
    ),
    array(
        'id' => 222,
        'title' => "Event2",
        'start' => "$year-$month-20 10:00",
        'end' => "$year-$month-20 12:00",
        'url' => "http://yahoo.com/",
        'allDay'=> false,
    )
));
?>
