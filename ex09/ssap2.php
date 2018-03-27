#! /usr/bin/php
<?php

function ssap_cmp($s1, $s2)
{
	$s1 = strtolower($s1);
	$s2 = strtolower($s2);
	$i = 0;
	while ($i < strlen($s1) && $i < strlen($s2)) {
		if (ctype_alpha($s1[$i]) && !ctype_alpha($s2[$i]))
			return (-1);
		else if (!ctype_alpha($s1[$i]) && ctype_alpha($s2[$i]))
			return (1);
		else if (ctype_digit($s1[$i]) && !ctype_digit($s2[$i]))
			return (-1);
		else if (!ctype_digit($s1[$i]) && ctype_digit($s2[$i]))
			return (1);
		else if ($s1[$i] != $s2[$i])
			break ;
		$i++;
	}
	return (ord($s1[$i]) - ord($s2[$i]));
}

$words = array();
$i = 1;

while ($i < $argc) {
	$words = array_merge($words, preg_split("/ /", $argv[$i++], -1, PREG_SPLIT_NO_EMPTY));
}

usort($words, 'ssap_cmp');

foreach ($words as $word) {
	printf("%s\n", $word);
}

?>