<?php
error_reporting(E_ALL);
var_dump($_GET);
$connection = new \PDO("mysql:host=localhost;dbname=magic", 'root', 'vagrant', [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
]);
if (!empty($_GET['message'])) {
    $connection->query("INSERT INTO `messages` SET `title`='{$_GET['message']}', `date`=NOW(), `user_id`={$_GET['user']}");
}
?>