<?php

$field2 = $_POST["edate"];

echo ("$field2");

$output = shell_exec('beacon -s ax0 ALLALL '.escapeshellarg($_POST['edate']));
header('Location: http://0.0.0.0/input.html');
?>
