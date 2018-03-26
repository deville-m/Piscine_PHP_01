#! /usr/bin/php
<?php

if ($argc != 2)
	exit("Incorrect Parameters\n");

$tmp = preg_split("#([ \t\+\-\*%/])#", $argv[1], -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
$res = array();
foreach ($tmp as $val) {
	if ($val != " " && $val != "\t")
		array_push($res, $val);
}
if (count($res) != 3 || !is_numeric($res[0]) || !is_numeric($res[2]))
	exit("Syntax Error\n");
$a = intval($res[0]);
$b = intval($res[2]);
if ($res[1] == "+")
	echo $a + $b;
else if ($res[1] == "-")
	echo $a - $b;
else if ($res[1] == "*")
	echo $a * $b;
else if ($res[1] == "/" && $b)
	echo $a / $b;
else if ($res[1] == "%" && $b)
	echo $a % $b;
else
	exit("Syntax Error\n");
echo "\n";

?>