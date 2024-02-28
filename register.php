<?php
    include "service/database.php";
    session_start();

    $register_message = "";

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO login_bisa (username, password) VALUES
        ('$username', '$password')"; 

        if($db->query($sql)) {
            $register_message = "daftar akun berhasil, silahkan login";
        }else {
            $register_message = "daftar akun gagal, silahkan coba lagi";
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
   
    <h3>DAFTAR AKUN</h3>
    <i><?= $register_message ?></i>

    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">Daftar sekarang</button>
    </form>

    
</body>
</html>