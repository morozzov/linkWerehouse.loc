<?php
session_start();
$id = $_SESSION['user_id'];
$name = $_SESSION['user_name'];
$mysqli = mysqli_connect("127.0.0.1:3306", "root", "root", "secondsite.loc");
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>linkWerehouse</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<header class="card-header p-1 mb-1 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="chainIcon.svg"
                     alt="mdo" width="32" height="32" class="rounded-circle">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="board.php" class="nav-link px-2 link-secondary">Board</a></li>
                <li><a href="personalBoard.php" class="nav-link px-2 link-dark">Your board</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <div>
                <a href="personal.php"">
                <img src="personal.svg"
                     alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
            </div>
        </div>
    </div>
</header>


<article class="card-body">
    <?php
    $result = mysqli_query($mysqli, "SELECT * FROM `links` WHERE (userId='$id') OR (visibility=1)");
    $countRows = mysqli_num_rows($result);
    if ($countRows != 0) {
        foreach ($result as $row) {
            echo "<div class=\"container my-3\">";
            echo "<a href=\"" . $row["url"] . "\" style='text-decoration: none; color: #191c1f;' >";
            if ($row["visibility"] == 0) {
                echo "<div class=\"row align-items-center rounded-3 border-danger border active\">";
            } else {
                echo "<div class=\"row align-items-center rounded-3 border-primary border active\">";
            }
            echo "<div class=\"col-lg-12 p-3 p-lg-4 pt-lg-3\">";
            echo "<p class=\"h3 lh-1\">" . $row["name"] . "</p>";
            echo "<p class=\"lead\">" . $row["about"] . "</p>";
            echo "<p class=\"link-secondary\">" . $row["date"] . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
        }
    }
    ?>

</article>
</body>
</html>