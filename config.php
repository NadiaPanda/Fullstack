<?php
session_start();
$user = 'root';
$password = '';
$pdo = new pdo ($dsn = 'mysql:dbname=fullstack;host=127.0.0.1', $user, $password ); 