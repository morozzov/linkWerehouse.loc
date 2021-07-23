<?php
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$mysqli = mysqli_connect("127.0.0.1:3306", "root", "root", "secondsite.loc");

$result = mysqli_query($mysqli, "SELECT * FROM `users` WHERE login='$login' AND password='$password'");

$contRows = mysqli_num_rows($result);

if ($contRows == 0) {
    header("Location: http://linkWerehouse.loc/error.php");
    exit();
} else {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $name = $row['name'];
    $login = $row['login'];
    $_SESSION['user_id'] = $id;
    $_SESSION['user_name'] = $name;
    $_SESSION['login'] = $login;

    header("Location: http://linkWerehouse.loc/board.php");
    exit();
}