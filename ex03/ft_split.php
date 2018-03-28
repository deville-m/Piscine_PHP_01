<?php
function ft_split(string $str)
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
?>