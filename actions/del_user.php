<?php

$userId = $_POST['id'];

$user = 'root';
$password = '';
$pdo = new pdo ($dsn = 'mysql:dbname=fullstack;host=127.0.0.1', $user, $password );

$query = "DELETE FROM users WHERE id = :id";
$res = $pdo->prepare($query);
$res->execute([
    ':id' => $userId,

]);

header('Location: ../index.php');
