<?php

$user = "";
$psswd = "";

foreach ($_SERVER as $key => $value)
{
	if ($key == "PHP_AUTH_USER")
		$user = $value;
	if ($key == "PHP_AUTH_PW")
		$psswd = $value;
}


if ($user == "")
	header("WWW-Authenticate: Basic");

$img42 = base64_encode(file_get_contents("../img/42.png"));

if($user == "zaz" && $psswd == "jaimelespetitsponeys")
{
	header("Content-Type: text/html");
	echo "<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64, $img42'>
</body></html>\n";
}
else
{
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
	header("Connection: close");
	header("WWW-Authenticate: Basic realm=''Espace membres''");
}

?>
