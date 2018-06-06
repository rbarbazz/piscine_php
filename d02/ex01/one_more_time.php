#!/usr/bin/php
<?php

function month_to_int($str)
{
	$str = strtolower($str);

	if (strcmp("janvier", $str) == 0)
		return("01");
	else if (strcmp("février", $str) == 0)
		return("02");
	else if (strcmp("fevrier", $str) == 0)
		return("02");
	else if (strcmp("mars", $str) == 0)
		return("03");
	else if (strcmp("avril", $str) == 0)
		return("04");
	else if (strcmp("mai", $str) == 0)
		return("05");
	else if (strcmp("juin", $str) == 0)
		return("06");
	else if (strcmp("juillet", $str) == 0)
		return("07");
	else if (strcmp("août", $str) == 0)
		return("08");
	else if (strcmp("aout", $str) == 0)
		return("08");
	else if (strcmp("septembre", $str) == 0)
		return("09");
	else if (strcmp("octobre", $str) == 0)
		return("10");
	else if (strcmp("novembre", $str) == 0)
		return("11");
	else if (strcmp("décembre", $str) == 0)
		return("12");
	else if (strcmp("decembre", $str) == 0)
		return("12");
}

function day_to_int($str)
{
	$str = strtolower($str);

	if (strcmp("lundi", $str) == 0)
		return("1");
	if (strcmp("mardi", $str) == 0)
		return("2");
	if (strcmp("mercredi", $str) == 0)
		return("3");
	if (strcmp("jeudi", $str) == 0)
		return("4");
	if (strcmp("vendredi", $str) == 0)
		return("5");
	if (strcmp("samedi", $str) == 0)
		return("6");
	if (strcmp("dimanche", $str) == 0)
		return("7");
}

if ($argc != 2)
	exit ;

$result = $argv[1];

date_default_timezone_set("Europe/Paris");

$tab = explode(" ", $result);

if (preg_match("/^(?i)L(?-i)undi$|^(?i)M(?-i)ardi$|^(?i)M(?-i)ercredi$|^(?i)J(?-i)eudi$|^(?i)V(?-i)endredi$|^(?i)S(?-i)amedi$|^(?i)D(?-i)imanche$/", $tab[0]) === 0)
{
	echo "Wrong Format\n";
	exit ;
}
elseif (!is_numeric($tab[1]) || $tab[1] < 1 || $tab[1] > 31 || strlen($tab[1]) > 2)
{
	echo "Wrong Format\n";
	exit ;
}
elseif (preg_match("/^(?i)J(?-i)anvier$|^(?i)F(?-i)évrier$|^(?i)F(?-i)evrier$|^(?i)M(?-i)ars$|^(?i)A(?-i)vril$|^(?i)M(?-i)ai$|^(?i)J(?-i)uin$|^(?i)J(?-i)uillet$|^(?i)A(?-i)oût$|^(?i)A(?-i)out$|^(?i)S(?-i)eptembre$|^(?i)O(?-i)ctobre$|^(?i)N(?-i)ovembre$|^(?i)D(?-i)écembre$|^(?i)D(?-i)ecembre$/", $tab[2]) === 0)
{
	echo "Wrong Format\n";
	exit ;
}
elseif ($tab[3] > 9999 || $tab[3] < -1969)
{
	echo "Wrong Format\n";
	exit ;
}
elseif(preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $tab[4]) !== 1)
{
	echo "Wrong Format\n";
	exit ;
}

$tab[2] = month_to_int($tab[2]);
$time = strtotime($tab[1].".".$tab[2].".".$tab[3]." ".$tab[4]);
if (strcmp(date("N", $time), day_to_int($tab[0])) != 0)
{
	echo "Wrong Format";
	exit ;
}

if ($time)
	echo ($time);
else
{
	echo "Wrong Format\n";
	exit ;
}

?>
