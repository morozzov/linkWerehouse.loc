<?php
session_start();
$id = $_SESSION['user_id'];
$name = $_SESSION['user_name'];
$rowId = $_POST["rowId"];
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
                <li><a href="board.php" class="nav-link px-2 link-dark">Board</a></li>
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
    <div class="container my-3">
        <div class="row align-items-center rounded-3 border-primary border active">
            <div class="col-lg-12 p-3 p-lg-4 pt-lg-3">
                <form method="post" action="addHandler.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="name"
                               placeholder="name@example.com">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="text" class="form-control" id="floatingInput"
                               placeholder="name@example.com">
                        <label for="floatingInput">About text</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="url" class="form-control" id="floatingInput"
                               placeholder="name@example.com">
                        <label for="floatingInput">Link</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="visibility" value="visibility"> Visible
                        </label>
                    </div>
                    <div class='form-control border-0' method='post'>
                        <input type='text' hidden='hidden' name='rowId'>
                        <input type='submit' class='btn btn-success' value='Add'>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>
</body>
</html>