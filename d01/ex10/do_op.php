#!/usr/bin/php
<?php

function ft_split($arr)
{
	$tab = explode(" ", $arr);
	$tab = array_diff($tab, ["", " ", "	"]);
	$tab = array_values($tab);
	return $tab;
}

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit ;
}
$first = ft_split($argv[1]);
$ope = ft_split($argv[2]);
$second = ft_split($argv[3]);

if ($ope[0] == "+")
	print($first[0] + $second[0]);
elseif ($ope[0] == "-")
	print($first[0] - $second[0]);
elseif ($ope[0] == "/")
	print($first[0] / $second[0]);
elseif ($ope[0] == "*")
	print($first[0] * $second[0]);
elseif ($ope[0] == "%")
	print($first[0] % $second[0]);

echo "\n";

?>
