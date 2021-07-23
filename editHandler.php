<?php
session_start();
$rowId = $_POST['rowId'];
$date = $_POST['date'];
$text = $_POST['text'];
$id = $_SESSION['user_id'];
$name = $_POST['name'];
$text = $_POST['text'];
$url = $_POST['url'];
$visibility = $_POST['visibility'];
if ($visibility == true) {
    $visibility = 1;
} else {
    $visibility = 0;
}
$now = new DateTime();
$date = $now->format('Y-m-d H:i:s');

$mysqli = mysqli_connect("127.0.0.1:3306", "root", "root", "secondsite.loc");

mysqli_query($mysqli, "UPDATE `links` SET `name` = '$name', `about` = '$text', `url` = '$url', `date` = '$date', `visibility` = '$visibility' WHERE `links`.`id` = '$rowId';");
header("Location: http://linkwerehouse.loc/personalBoard.php");
exit();
?>