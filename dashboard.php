<?php

session_start();

$isUserAuthenticated = $_SESSION['user_id'] === 1; // dummy

if (!$isUserAuthenticated) {
    $redirectTo = $_SERVER['REQUEST_URI'];
    header("location: /login.php?redirectTo=$redirectTo");
}

?>
<html>
    <body>
        Hi, I'm dashboard
        <a href="/article.php">article</a>
        <a href="/logout.php">logout</a>
    </body>
</html>
