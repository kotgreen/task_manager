<?php

include('db_connect.php');

$id = $_GET['id'];
$sql = "UPDATE `tasks` SET `done` = '1' WHERE `tasks` . `id` = $id";
$pdo->exec($sql);

header('location:index.php');