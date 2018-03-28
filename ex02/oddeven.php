#! /usr/bin/php
<?php
	if (fopen("php://stdin", 'r') === false)
		exit;
	while (true)
	{
		echo "Entrez un nombre: ";
		$out = trim(fgets(STDIN));
		if (feof(STDIN))
			exit(0);
		if (! is_numeric($out))
			printf("'%s' n'est pas un chiffre\n", $out);
		else {
			$tmp = substr($out, -1) - '0';
			if ($tmp % 2 == 0)
				printf("Le chiffre %s est Pair\n", $out);
			else
				printf("Le chiffre %s est Impair\n", $out);
		}
	}
?>