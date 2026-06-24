<?php
session_start();
include 'koneksi.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "admin" && $pass == "1234"){
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login gagal! <a href='login.php'>Coba lagi</a>";
}
?>
