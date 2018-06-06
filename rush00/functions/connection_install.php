<?php
require_once dirname(__FILE__)."/mysql_logins.php";
$db = mysqli_connect(NULL, $logindb, $passworddb, NULL,0,'/Users/rbarbazz/mamp/mysql/tmp/mysql.sock');

if (mysqli_connect_errno())
{
    echo 'Failed to connect to MySQL:' . mysqli_connect_error();
    exit;
}
?>