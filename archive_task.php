<?php

include('db_connect.php');

$date = date("Y-m-d");
$id = $_GET['id'];
$sql = "UPDATE `tasks` SET `done` = '1', `end_date` = '$date' WHERE `tasks` . `id` = $id";
$pdo->exec($sql);

header('location:index.php');