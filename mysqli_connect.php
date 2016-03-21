<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "php project";

$db=new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect to the database");

?>