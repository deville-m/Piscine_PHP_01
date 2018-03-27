#! /usr/bin/php
<?php
	if ($argc <= 1)
		exit(0);
	$split = explode(' ', $argv[1]);
	$tmp = array();
	foreach ($split as $item) {
		if ($item != "")
			array_push($tmp, $item);
	}
	array_push($tmp, array_shift($tmp));
	$final = implode(' ', $tmp);
	if ($final != "")
		printf("%s\n", $final);
?>
