<?php

function testlog_pass_sub($tab)
{

	$login = "";
	$passwd = "";
	$submit = "";

	foreach ($tab as $key => $value)
	{
		if ($key == "login")
			$login = $value;
		if ($key == "passwd")
			$passwd = $value;
		if ($key == "submit")
			$submit = $value;
	}
	if ($login != "" && $passwd != "" && $submit != "")
		return TRUE;
	else
		return FALSE;
}

session_start();

$login = "";
$passwd = "";

if (testlog_pass_sub($_GET))
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
	$login = $_GET['login'];
	$passwd = $_GET['passwd'];
}
else
{
	foreach ($_SESSION as $key => $value)
	{
		if ($key == 'login')
			$login = $value;
		if ($key == 'passwd')
			$passwd = $value;
	}
}

echo "<html>
<body>
	<form action='index.php' method='get'>
		Identifiant: <input type='text' name='login' value='$login'/>
		<br />
		Mot de passe: <input type='text' name='passwd' value='$passwd'/>
		<br />
		<input type='submit' name='submit' value='OK'>
	</form>
</body>
</html>"
?>
