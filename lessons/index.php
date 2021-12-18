<pre>
<?php

$user = $password = 'root';
$pdo = new pdo ($dsn = 'mysql:dbname=fullstack;host=127.0.0.1', $user, $password );


$query = "SELECT *  from users";
$res = $pdo->query($query);
print_r ($res->fetchAll());