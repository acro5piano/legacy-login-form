<html>
    <body>
        <form method="POST" action="/post-login.php?redirectTo=<?php echo $_GET['redirectTo'] ?>">
            email
            <input name="email">
            password
            <input name="password">
            <input type="submit">
        </form>
    </body>
</html>
