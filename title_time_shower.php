<?php 

$date_a = new DateTime();
$date_b = new DateTime('2018-04-07 21:00:00');

$interval = date_diff($date_a,$date_b);

?>