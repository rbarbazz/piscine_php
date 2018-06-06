#!/usr/bin/php
<?php

function ft_split($arr)
{
	$tab = explode(" ", $arr);
	$tab = array_diff($tab, ["", " "]);
	$tab = array_values($tab);
	return $tab;
}

if ($argc == 1)
	exit ;

$tab = ft_split($argv[1]);

$first = $tab[0];

array_shift($tab);

foreach ($tab as $value)
	echo "$value ";
echo "$first";
echo "\n";
?>
