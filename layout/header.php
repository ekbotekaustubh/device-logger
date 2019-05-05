<html lang="en">
<head>
    <title>Device Logger</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Device logger</h1>
    <p>Log your device!</p>
</div>
<?php
if (isset($_SESSION['userName'])):
    include '../layout/navbar.php';
endif;
?>
<div class="container">