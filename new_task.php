<?php

include("db_connect.php");

$task = $_POST['add_task'];
$sql = "INSERT INTO `tasks` (`id`, `created_at`, `task`, `archive`) VALUES (NULL, '2022-05-05', '$task', '0')";
$pdo->exec($sql);

header('location:index.php');