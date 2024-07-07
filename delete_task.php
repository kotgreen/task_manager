<?php

include('db_connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM `tasks` WHERE `id` = '$id'";
$pdo->exec($sql);

if ($_GET['page'] === 'index') {
    header('location:index.php');
} elseif ($_GET['page'] === 'archive') {
    header('location:archive.php');
}
