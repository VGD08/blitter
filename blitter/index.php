<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blitter</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
</head>
<body>


<!--Login Page-->
<div class="login-container">
    <img src="assets/Blitter.jpeg" alt="">
    <h2>Login</h2>
    <form class="login-form" method="post" action="../blitter/php/login-php.php">
        <div class="input-group">
            <label for="username">Username/Email</label>
            <input type="Email" id="username" required placeholder="example@gmail.com">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" required placeholder="ExamplePassword2@">
        </div>
        <button type="submit">Log in</button>
        <h2 id="copyright">© Blitter. All rights reserved.</h2>
    </form>
</div>
</body>
</html>