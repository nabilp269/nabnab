<?php
session_start();

if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: halaman.html');
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
    <h1>SELAMAT DATANG <?= $_SESSION["username"] ?></h1>

    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>
</body>
</html>