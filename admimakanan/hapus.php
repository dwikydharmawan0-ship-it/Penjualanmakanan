<?php
session_start();
if(!isset($_SESSION['admin'])) header("Location: ../login.php");
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM menu WHERE id='$id'");
header("Location: ../dashboard.php");
?>
