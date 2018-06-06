#!/usr/bin/php
<?php
	function ft_split($arr)
	{
		$tab = explode(" ", $arr);
		$tab = array_diff($tab, ["", " "]);
		$tab = array_values($tab);
		return $tab;
	}
	$tab = ft_split($argv[1]);
	foreach ($tab as $value)
	{
		echo "$value";
		if ($value != end($tab))
			echo " ";
	}
	if ($argc > 1)
		echo "\n";
?>
