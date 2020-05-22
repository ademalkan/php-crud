<?php
$username = $_GET['username'];
$password = $_GET['password'];
$id = $_GET['id'];

$baglan = mysqli_connect('localhost', 'root', '', 'db');
$update =$baglan->query("UPDATE tablo SET username = '$username', password = '$password' WHERE id=$id");
header("location:index.php");
 ?>
