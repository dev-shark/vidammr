<?php
$file_handle = fopen('tmp.txt', 'r');
$contents = fread($file_handle, filesize('tmp.txt'));
fclose($file_handle);
?>
