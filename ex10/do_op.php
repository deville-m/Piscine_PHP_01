#! /usr/bin/php
<?php

if ($argc != 4)
	exit("Incorrect Parameters\n");

$tmp = array();
foreach ($argv as $key => $val) {
	if ($key < 1)
		continue ;
	array_push($tmp, trim($val));
}
$a = intval($tmp[0]);
$b = intval($tmp[2]);
if ($tmp[1] == "+")
	echo $a + $b;
else if ($tmp[1] == "-")
	echo $a - $b;
else if ($tmp[1] == "*")
	echo $a * $b;
else if ($tmp[1] == "/")
	echo $a / $b;
else if ($tmp[1] == "%")
	echo $a % $b;
echo "\n";
?>