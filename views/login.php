<?php
$message = $_GET['message'] ?? '';
?>
<div class="container">
    <div class="row">
        <div class="absolute-Center is-Responsive">
            <form id="loginForm" name="loginForm" action="src/controllers/login.php" method="post">
                <div> <?php echo $message; ?></div>
                <div class="form-group">
                    <div class="col1"><input type="text" name="userName" id="userName" placeholder="Username" class="form-control"> </div>
                </div>
                <div class="form-group">
                    <div class="col1"><input type="password" name="password" id="password" placeholder="Password"  class="form-control"> </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" id="login" value="Login" class="form-control btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>