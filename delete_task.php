<?php

include('db_connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM `tasks` WHERE `id` = '$id'";
$pdo->exec($sql);

header('location:index.php');