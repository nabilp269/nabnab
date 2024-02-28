<?php
    include "service/database.php";
    session_start();
    
    if(isset($_SESSION["is_login"])) {
        header("location: halaman.php");
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login_bisa WHERE username='$username' AND password='$password'";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data ["username"];
            $_SESSION["is_login"] = true;
            
            header ("location: halaman.php");
        }else {
            echo "akun data tidak di temukan";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h2>Login Database</h3>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</header>
    <h3>LOGIN  AKUN</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="login">Masuk sekarang</button>
    </form>

    
</body>
</html>