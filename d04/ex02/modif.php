<?php

function test_all_values($tab)
{
	$login = FALSE;
	$oldpw = FALSE;
	$newpw = FALSE;
	$submit = FALSE;

	foreach ($tab as $key => $value)
	{
		if ($key == "login" && $value != "")
			$login = TRUE;
		if ($key == "oldpw" && $value != "")
			$oldpw = TRUE;
		if ($key == "newpw" && $value != "")
			$newpw = TRUE;
		if ($key == "submit")
			$submit = TRUE;
	}
	if ($login == TRUE && $oldpw == TRUE && $newpw == TRUE && $submit == TRUE)
		return (TRUE);
	else
		return (FALSE);
}

if (test_all_values($_POST) == FALSE)
{
	echo "ERROR\n";
	exit ;
}

$userinfo['login'] = $_POST['login'];
$userinfo['oldpw'] = hash("whirlpool", $_POST['oldpw']);
$userinfo['newpw'] = hash("whirlpool", $_POST['newpw']);

if (file_get_contents("../private/passwd") === FALSE)
{
	echo "ERROR\n";
	exit ;
}
else
{
	$tab = unserialize(file_get_contents("../private/passwd"));
	if ($tab)
	{
		foreach ($tab as $key => $value)
		{
			if ($value && $value['login'] == $userinfo['login'] && $value['passwd'] == $userinfo['oldpw'])
			{
				$tab[$key]['passwd'] = $userinfo['newpw'];
				echo("OK\n");
				file_put_contents("../private/passwd", serialize($tab));
				exit ;
			}
		}
	}
}

echo "ERROR\n";

?>