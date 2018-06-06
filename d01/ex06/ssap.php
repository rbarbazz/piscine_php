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

array_shift($argv);

foreach ($argv as $value)
{
	$str = ft_split($value);
	$bigarr = array_merge($str, (array)$bigarr);
}

sort($bigarr);

foreach ($bigarr as $value)
	echo "$value\n";
?>
