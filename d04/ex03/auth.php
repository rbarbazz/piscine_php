<?php

function auth($login, $passwd)
{
	if (file_get_contents("../private/passwd") === FALSE)
		return FALSE;
	$tab = unserialize(file_get_contents("../private/passwd"));
	foreach ($tab as $key => $value)
	{
		if ($value && $value['login'] == $login && $value['passwd'] == hash("whirlpool", $passwd))
			return TRUE;
	}
	return FALSE;
}

?>