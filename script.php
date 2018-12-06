<?php

$field2 = $_POST["edate"];

echo ("$field2");

$output = shell_exec('/home/pi/ax25-packet-network/supervisory/super2 -s ax0 ALLALL '.escapeshellarg($_POST['edate']));

header('Location: http://0.0.0.0/1input.html');
?>
