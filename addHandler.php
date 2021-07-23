<?php
session_start();

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


mysqli_query($mysqli, "INSERT INTO `links` (`id`, `userId`, `name`, `about`, `url`, `date`, `visibility`) VALUES (NULL, '$id', '$name', '$text', '$url', '$date', '$visibility')");
header("Location: http://linkwerehouse.loc/personalBoard.php");
exit();
?>