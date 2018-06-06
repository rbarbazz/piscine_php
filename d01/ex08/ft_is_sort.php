<?php

function sort_dec($arr)
{
	$i = 0;
	while ($arr[$i + 1])
	{
		if (strcmp($arr[$i], $arr[$i + 1]) < 0)
			return (false);
		$i++;
	}
	return (true);
}

function sort_inc($arr)
{
	$i = 0;
	while ($arr[$i + 1])
	{
		if (strcmp($arr[$i], $arr[$i + 1]) > 0)
			return (false);
		$i++;
	}
	return (true);
}

function ft_is_sort($arr)
{
	if (sort_dec($arr) || sort_inc($arr))
		return (true);
	return (false);
}

?>
