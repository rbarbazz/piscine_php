#!/usr/bin/php
<?php

$search = $argv[1];

$i = 2;

while ($argv[$i])
{
	$new = explode(":", $argv[$i]);
	if ($new[2])
		echo "Syntax error";
	if ($new[0] == $search)
		$result = $new[1];
	$i++;
}
echo "$result";

if ($result)
	echo "\n";

?>
