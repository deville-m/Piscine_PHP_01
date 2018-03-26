#! /usr/bin/php
<?php

	function is_alpha($str)
	{
		for ($i = 0; $i < count($str); $i++) {
			if (!($str[$i] >= 'a' && $str[$i] <= 'z') && !($str[$i] >= 'A' && $str[$i] <= 'Z'))
				return (0);
		}
		return (1);
	}

	function print_array($arr)
	{
		foreach ($arr as $val) {
				printf("%s\n", $val);
			}	
	}

	function ft_split($str)
	{
		$tmp = explode(' ', $str);
		$final = array();
		foreach ($tmp as $item) {
			if ($item != "")
				array_push($final, $item);
		}
		return ($final);
	}
	
	$tmp = array();
	foreach ($argv as $k => $v) {
		if ($k < 1)
			continue;
		array_push($tmp, $v);
	}
	$glued = implode(' ', $tmp);
	$all = ft_split($glued);
	$alpha = array();
	$numbers = array();
	$other = array();
	foreach ($all as $val) {
		if (is_alpha($val))
			array_push($alpha, $val);
		else if (is_numeric($val))
			array_push($numbers, $val);
		else
			array_push($other, $val);
	}
	sort($alpha, SORT_FLAG_CASE | SORT_STRING);
	sort($numbers, SORT_STRING);
	sort($other, SORT_STRING);
	print_array($alpha);
	print_array($numbers);
	print_array($other);
?>