<?php

function is_login_and_psswd($tab)
{
	$id= FALSE;
	$mdp= FALSE;
	$sub= FALSE;

	foreach ($tab as $key => $value)
	{
		if ($key == "login" && $value != "")
			$id = TRUE;
		if ($key == "passwd" && $value != "")
			$mdp = TRUE;
		if ($key == "submit")
			$sub = TRUE;
	}
	if ($id == TRUE && $mdp == TRUE && $sub == TRUE)
		return (TRUE);
	else
		return (FALSE);
}

if (is_login_and_psswd($_POST) == FALSE)
{
	echo "ERROR\n";
	exit ;
}

$userinfo['login'] = $_POST['login'];
$userinfo['passwd'] = hash("whirlpool", $_POST['passwd']);
$tab[] = $userinfo;

if (file_exists("../private") === FALSE)
	mkdir("../private");

if (file_exists("../private/passwd") === FALSE)
	file_put_contents("../private/passwd", serialize($tab));
else
{
	$tab = unserialize(file_get_contents("../private/passwd"));
	if ($tab)
	{
		foreach ($tab as $key => $value)
		{
			foreach ($value as $key => $value)
			{
				if ( $key == "login" && $value == $_POST['login'])
				{
					echo ("ERROR\n");
					exit ;
				}
			}
		}
	}
	$tab[] = $userinfo;
	file_put_contents("../private/passwd", serialize($tab));
}

echo("OK\n");

?>