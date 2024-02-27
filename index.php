<!DOCTYPE html>
<html>
    <head>
    </head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <form action="Login.php" method="post">
        <h2>LOGIN</h2>
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" placeholder="E-mail">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br>

        <a href="login.php">
            <button>Login</button>
        </a>
        <div class="regist">
                <a href="register.php">Register</a>
        </div>
    </form>
</body>
</html>