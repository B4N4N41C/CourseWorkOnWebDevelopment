<?php
session_start();
require 'db.php';
$login = $_POST['login'];
$password = $_POST['password'];
$user = selectOne('users', ['Login' => $login]);
if (count($user) > 0 && $user['Password'] === $password) {
    $_SESSION['user'] = [
        "Name" => $user['Name']
    ];
    header('Location: ../index.php');
} else {
    header('Location: ../pages/authorization.html');
}