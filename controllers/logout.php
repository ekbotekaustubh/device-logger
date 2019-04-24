<?php
session_start();

unset($_SESSION['userName'], $_SESSION['name']);
header('location: index.php');
exit;