<?php $message = $_GET['message'] ?? ''; ?>
<html lang="en">
    <head>
        <title>Device Logger</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
        <div class="container">
            <div class="row">



        <form id="loginForm" name="loginForm" action="login.php" method="post">
                <div> <?php echo $message; ?></div>
                <div class="col">
                    <div>User name:</div>
                    <div><input type="text" name="userName" id="userName"> </div>
                </div>
                <div class="col">
                    <div>Password:</div>
                    <div><input type="password" name="password" id="password"> </div>
                </div>
                <div class="col">
                    <input type="submit" name="login" id="login" value="Login">
                </div>

        </form>
            </div>
        </div>
        <footer>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </footer>
    </body>
</html>