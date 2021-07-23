<?php
session_start();
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$name = $_POST['name'];
$login = $_POST['login'];
$id = $_SESSION['user_id'];

$mysqli = mysqli_connect("127.0.0.1:3306", "root", "root", "secondsite.loc");

if ($password1 == $password2 and $password1 != "") {
    mysqli_query($mysqli, "UPDATE `users` SET `password` = '$password1' WHERE `users`.`id` = '$id';");
}

$result = mysqli_query($mysqli, "SELECT * FROM `users` WHERE (login='$login')");
$countRows = mysqli_num_rows($result);
if ($countRows == 0) {
    mysqli_query($mysqli, "UPDATE `users` SET `login` = '$login' WHERE `users`.`id` = '$id';");
    $_SESSION['login'] = $login;
}
if ($name != "") {
    mysqli_query($mysqli, "UPDATE `users` SET `name` = '$name' WHERE `users`.`id` = '$id';");
    $_SESSION['user_name'] = $name;
}


header("Location: http://linkwerehouse.loc/personal.php");
exit();
?>