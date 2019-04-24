<?php
session_start();
include 'config/config.php';

if (!empty($_POST['userName']) && !empty($_POST['password'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $statement = $db->prepare('select * from user where user_name = ? and password = ?');
    $statement->execute([$userName, md5($password)]);

    if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['userName'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];

        header('location: DashboardController.php');
        exit;
    }

    header('location: index.php?message=user name and / or password may be wrong.');
    exit;
}