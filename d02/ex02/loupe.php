#!/usr/bin/php
<?php

$file = file_get_contents($argv[1]);

$file = preg_replace("/(<a.*title=)\K(.*\")/", "", $file);
echo "$file";

?>
