<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$file_handle = fopen('tmp.txt', 'r');
$contents = fread($file_handle, filesize('tmp.txt'));
fclose($file_handle);

$myfile = fopen("tmp.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("tmp.txt"));
fclose($myfile);
?>
