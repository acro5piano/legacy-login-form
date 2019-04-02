<?php

session_start();

$redirectTo = $_GET['redirectTo'] ?: '/dashboard.php';

$_SESSION['user_id'] = 1;

header("location: $redirectTo");
