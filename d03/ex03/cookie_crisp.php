<?php

$action = "";
$name = "";
$val = "";

foreach ($_GET as $key => $value)
{
	if ($key == "action")
		$action = $value;
	if ($key === "name")
		$name = $value;
	if ($key === "value")
		$val = $value;
}

if ($action == "set" && $name != "")
	setcookie($name, $val, time()+60);

if ($action == "get" && $name != "")
{
	foreach ($_COOKIE as $key => $value)
		if ($key == $name)
			echo "$value\n";
}

if ($action == "del" && $name != "")
	setcookie($name, "", time(-1));

?>
