#! /usr/bin/php
<?php
foreach($argv as $k => $v) {
	if ($k < 1)
		continue ;
	printf("%s\n", $v);
}
?>