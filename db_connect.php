<?php

$host = 'localhost';
$dbname = 'task_manager';
$user = 'root';
$password = 'mysql';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$sql = "SELECT * FROM `tasks`";
$query = $pdo->query($sql);