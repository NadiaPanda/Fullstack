<?php
session_start();
unset($_SESSION['user']);
header('Location: ../pages/login.php');