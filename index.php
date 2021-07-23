<!--<!doctype html>-->
<!--<html lang="ru">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1>login form</h1>-->
<!--<form method="post" action="formAuthHandler.php">-->
<!--    <div><label>Login: <input type="text" name="login"></label></div>-->
<!--    <div><label>Password: <input type="password" name="password"></label></div>-->
<!--    <div><input type="submit" value="Войти"></div>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>linkWerehouse</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">


    <link href="/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="signin.css" rel="stylesheet">


</head>
<body class="text-center">

<main class="form-signin">
    <form method="post" action="formAuthHandler.php">
        <img class="mb-4" src="chainIcon.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Sign in</h1>

        <div class="form-floating">
            <input name="login" type="email" class="form-control" placeholder="login">
            <label name="login" for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" placeholder="Password">
            <label name="password" for="floatingPassword">Password</label>
        </div>

        <!--        <div class="checkbox mb-3">-->
        <!--            <label>-->
        <!--                <input type="checkbox" value="remember-me"> Remember me-->
        <!--            </label>-->
        <!--        </div>-->
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>


    </form>
</main>


</body>
</html>