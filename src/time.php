<?php
date_default_timezone_set("Europe/Berlin");
$date = new DateTime();
echo "Hello: " . $date->format('Y-m-d H:i:s');
echo "\n";
 ?>
