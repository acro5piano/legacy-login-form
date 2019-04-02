<?php

session_start();

session_unset();

?>
<html>
    <body>
        you are logged out.
        <a href="/article.php">article</a>
        <a href="/login.php">login</a>
    </body>
</html>
