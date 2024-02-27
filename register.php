<!DOCTYPE html>
<html>
    <head>
    </head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="regist.css">
</head>
<body>
    <form action="register.php" method="post">
        <h2>REGISTER</h2>
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>    

            <label for="email">E-mail:</label>
            <input type="text" name="email" required><br>
    
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
    
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            
            <label for="level">Level:</label>
            <select name="level" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="Submit" name="Submit">REGISTER</button>
        </form>

<?php
if (isset($_POST['Submit'])) {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $level= $_POST['level'];
    echo($password);

    include_once("connect.php");

    $result = mysqli_query($mysqli,"INSERT INTO user(name,email,username,password,level)
    VALUES('$name','$email','$username','$password','$level')");

    header("location:index.php");
}
?>

</body>
</html>