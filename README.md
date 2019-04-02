# legacy-login-form

This repo shows how to implement "redirect after login" without session.

# Run

```
php -S localhost:9292 -t public
```

And open http://localhost:9292/article.php

# How it works

- 1. Access to https://localhost:9292/articles/1
- 2. As the user is not authenticated, redirect to https://localhost:9292/login?redirect=https://localhost:9292/articles/1
- 3. Do login
- 4. As `redirectTo` GET parameter is set, the user will be redirected to https://localhost:9292/articles/1
