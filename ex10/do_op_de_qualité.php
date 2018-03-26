#! /usr/bin/php
<?php
	if ($argc != 4)
		echo "Invalid Parameters\n";
	eval("print ".$argv[1].$argv[2].$argv[3].";"));
	echo "\n";
?>