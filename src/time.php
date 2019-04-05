<?php
date_default_timezone_set("Europe/Berlin");
$date = new DateTime();
echo "1 Minute: " . $date->format('Y-m-d H:i:s');
echo "\n";
 ?>
