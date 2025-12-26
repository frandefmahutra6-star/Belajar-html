<?php

$host = "localhost";
$user ="root";
$pass ="";
$db   ="smanduker";


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
}


// optional biar aman charset
// mysqli_set_charset($conn, "utf8mb4");
?>