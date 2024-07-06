<?php

include("db_connect.php");

$date = date("Y-m-d");
$task = $_POST['add_task'];
$sql = "INSERT INTO `tasks` (`id`, `created_at`, `task`, `done`) VALUES (NULL, '$date', '$task', '0')";
$pdo->exec($sql);

header('location:index.php');