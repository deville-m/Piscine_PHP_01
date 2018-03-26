#! /usr/bin/php
<?php
	function ft_split($str)
	{
		$tmp = explode(' ', $str);
		$final = array();
		foreach ($tmp as $item) {
			if ($item != "")
				array_push($final, $item);
		}
		sort($final, SORT_STRING);
		return ($final);
	}
	
	$tmp = array();
	foreach ($argv as $k => $v) {
		if ($k < 1)
			continue;
		array_push($tmp, $v);
	}
	$glued = implode(' ', $tmp);
	$final = ft_split($glued);
	foreach ($final as $word) {
		printf("%s\n", $word);
	}
?>