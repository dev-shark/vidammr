<?php
#error_reporting(E_ALL);
#ini_set('display_errors', '1');

$file_handle = fopen('tmp.txt', 'r');
$contents = fread($file_handle, filesize('tmp.txt'));
fclose($file_handle);

$myfile = fopen("tmp.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("tmp.txt"));
fclose($myfile);

function suma($a,$b){
	$sum= $a + $b;
	return  $sum;
}

function resta($a,$b){
	$res= $a - $b;
	return  $res;
}

function multiplicacion($a,$b){
	$pro= $a * $b;
	return  $pro;
}

function division($a,$b){
  $div= $a / $b;
  return $div;
}

echo suma(100,60)."\n";
echo resta(15,5)."\n";
echo multiplicacion(100,87)"\n";
echo division(100,25)"\n";
?>
