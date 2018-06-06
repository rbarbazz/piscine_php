#!/usr/bin/php
<?php
if ($argc != 2)
{
    print("Incorrect Parameters\n");
    exit ;
}
$i = 0;
while($argv[1][$i])
{
    if (!is_numeric($argv[1][$i]) && $argv[1][$i] != " " && $argv[1][$i] != "+" && $argv[1][$i] != "-" && $argv[1][$i] != "*"
    && $argv[1][$i] != "/" && $argv[1][$i] != "%")
    {
        print("Syntax Error\n");
        exit ;
    }
    $i++;
}
$i = 0;
while ($argv[1][$i] == ' ')
    $i++;
if($argv[1][$i] == "+" || $argv[1][$i] == "-")
    $a .= $argv[1][$i++];
while (is_numeric($argv[1][$i]))
    $a .= $argv[1][$i++];
while ($argv[1][$i] == ' ')
    $i++;
if($argv[1][$i] == "+" || $argv[1][$i] == "-" || $argv[1][$i] == "*" || $argv[1][$i] == "/" || $argv[1][$i] == "%")
    $op = $argv[1][$i++];
else
{
    print("Syntax Error\n");
    exit;
}
while ($argv[1][$i] == ' ')
    $i++;
if($argv[1][$i] == '+' || $argv[1][$i] == '-')
    $b .= $argv[1][$i++];
while (is_numeric($argv[1][$i]))
    $b .= $argv[1][$i++];
while($argv[1][$i] == ' ')
    $i++;
if($argv[1][$i] || (($op == "/" || $op == "%") && $b == "0") || ("9223372036854775807" < $a || $a < "-9223372036854775808") || ("9223372036854775807" < $b || $b < "-9223372036854775808"))
{
    print("Syntax Error\n");
    exit;
}
if ($op == "+")
    print($a + $b);
else if ($op == "-")
    print($a - $b);
else if ($op == "*")
    print($a * $b);
else if ($op == "/")
    print($a / $b);
else if ($op == "%")
    print($a % $b);

echo "\n";
	
?>
