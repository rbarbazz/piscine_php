#!/usr/bin/php
<?php
	$file = fopen("php://stdin", "r");
	while(!feof($file)){
		echo "Entrez un nombre: ";
		$input = fgets($file);
		$newinput = trim($input);
		if (!is_numeric($newinput) && !feof($file))
			echo "'$newinput' n'est pas un chiffre\n";
		elseif ("9223372036854775807" < $newinput || $newinput < "-9223372036854775808")
			echo "Limite du long atteinte\n";
		elseif (($input % 2) == 0 && !feof($file))
			echo "Le chiffre $newinput est Pair\n";
		elseif (($input % 2) != 0 && !feof($file))
			echo "Le chiffre $newinput est Impair\n";
	}
?>
