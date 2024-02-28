<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "login";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error) {
    echo "koneksi db berhasil";
    die("error!");
}
?>