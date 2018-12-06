<?php

$field2 = $_POST["message"];

echo ("$field2");

$output = shell_exec('beacon -s ax0 ALLALL '.escapeshellarg($_POST['message']));
header('Location: http://0.0.0.0/input.html');
?>
