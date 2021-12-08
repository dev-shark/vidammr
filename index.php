<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$file_handle = fopen('tmp.txt', 'r');
$contents = fread($file_handle, filesize('tmp.txt'));
fclose($file_handle);
?>
