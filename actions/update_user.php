<?php
session_start();

$user = 'root';
$password = '';
$pdo = new pdo ($dsn = 'mysql:dbname=fullstack;host=127.0.0.1', $user, $password ); 

$userID = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];

$query = "UPDATE users SET name = :name, login = :login WHERE id = :id";
$res = $pdo->prepare($query);
$status =  $res->execute([
     ':id' => $userID,
     ':login' => $login,
     ':name' => $name
 ]);
if (!$status){
$error = $res->errorInfo();
$_SESSION['error'] =$error;
}
#заполнить ключ в сесси если запрос выполнился успешно
header("Location:../pages/user.php?id=$useId");