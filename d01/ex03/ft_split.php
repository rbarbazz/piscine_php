<?php

function ft_split($arr)
{
	$tab = explode(" ", $arr);
	$tab = array_diff($tab, ["", " "]);
	sort($tab);
	$tab = array_values($tab);
	print_r($tab);
}

?>
