#! /usr/bin/php
<?php

if (feof(STDIN) || $argc != 2 || ($argv[1] != "moyenne" && $argv[1] != "moyenne_user" && $argv[1] != "ecart_moulinette"))
	exit;
$contents = fgets(STDIN);
$data = array();
while ($line = fgets(STDIN)) {
	$line = trim($line);
	$userinfo = preg_split("/;/", $line, -1, PREG_SPLIT_NO_EMPTY);
	if (count($userinfo) < 3 || !is_numeric($userinfo[1]))
		continue;
	$data[$userinfo[0]][$userinfo[2]] += $userinfo[1];
}
ksort($data);
if ($argv[1] == "moyenne")
{
	$total = 0.0;
	$nb = 0;
	foreach ($data as $user) {
		foreach ($user as $peer => $note) {
			if ($peer != "moulinette") {
				$total += $note;
				$nb++;
			}
		}
	}
	if ($nb)
		echo ($total / $nb) . "\n";
}
else if ($argv[1] == "moyenne_user") {
	foreach ($data as $user => $notes) {
		$total = 0.0;
		$nb = 0;
		foreach ($notes as $peer => $note) {
			if ($peer != "moulinette") {
				$total += $note;
				$nb++;
			}
		}
		if ($nb)
			echo $user . ":" . ($total / $nb) . "\n";
	}
}
else {
	foreach ($data as $user => $notes) {
		$avg = 0.0;
		$nb = 0;
		foreach ($notes as $peer => $note) {
			if ($peer != "moulinette") {
				$avg += $note - $notes["moulinette"];
				$nb++;
			}
		}
		if ($nb)
			echo $user . ":" . ($avg / $nb) . "\n";
	}
}

?>