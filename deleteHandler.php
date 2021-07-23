<?php
session_start();

$rowId = $_POST["rowId"];

$mysqli = mysqli_connect("127.0.0.1:3306", "root", "root", "secondsite.loc");

mysqli_query($mysqli, "DELETE FROM `links` WHERE `links`.`id` = '$rowId'");
header("Location: http://linkWerehouse.loc/personalBoard.php");
exit();
?>