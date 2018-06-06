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

natcasesort($bigarr);

foreach ($bigarr as $value)
{
	if (ctype_alpha($value[0]))
		echo "$value\n";
}

sort($bigarr, SORT_STRING);

foreach ($bigarr as $value)
{
	if (is_numeric($value[0]))
		echo "$value\n";
}

foreach ($bigarr as $value)
{
	if (!ctype_alpha($value[0]) && !is_numeric($value[0]))
		echo "$value\n";
}

?>
