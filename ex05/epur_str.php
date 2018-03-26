#! /usr/bin/php
<?php
if ($argc != 2)
	exit(0);
$tmp = explode(' ', $argv[1]);
$tmp2 = array();
foreach ($tmp as $item) {
	if ($item != "")
		array_push($tmp2, $item);
}
$res = implode(' ', $tmp2);
printf("%s\n", $res);
?>