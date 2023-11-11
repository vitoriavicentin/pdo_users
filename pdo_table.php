<?php
require_once "pdo_connection.php";
require_once "env.php";

$query = 'create table if not exists `users` ( `users_id` mediumint(9) NOT NULL, `users_name` char(30) NOT NULL, `users_mail` char(30) NOT NULL, `users_password` char(30) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;';

$connection =  newConnection($dns,$user,$password);
$return_connection = $connection->exec($query);
echo $return_connection;
