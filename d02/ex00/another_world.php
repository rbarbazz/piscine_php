#!/usr/bin/php
<?php

$search = $argv[1];

if ($argc < 2)
	exit ;
$result = preg_replace("/\s+/", " ", $search);
$result = preg_replace("/^\s*/", "", $result);
$result = preg_replace("/\s*$/", "", $result);

echo "$result\n";

?>
