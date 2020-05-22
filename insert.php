<?php
$username = $_GET['username'];
$password = $_GET['password'];
$id = $_GET['id'];

$baglan = mysqli_connect('localhost', 'root', '', 'db');
$veriEkle = $baglan->query("INSERT INTO  tablo (username, password) VALUES ('$username','$password')");
header("location:index.php");
?>
