#! /usr/bin/php
<?php

if ($argc <= 2)
	exit;

$arr = array();
$i = 2;
while ($i < $argc) {
	$tmp = preg_split("/:/", $argv[$i], -1, PREG_SPLIT_NO_EMPTY);
	$arr[$tmp[0]] = $tmp[1];
	$i++;
}
if (isset($arr[$argv[1]]))
	echo $arr[$argv[1]]."\n";

?>
