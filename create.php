<?php


$baglan = mysqli_connect('localhost', 'root', '', 'db');
$create = "CREATE TABLE yenitablo (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
ad VARCHAR(12),
soyad VARCHAR(12)
)";

if ($baglan->query($create) === TRUE) {
    echo "Tablo oluşturma işlemi başarılı!";
} else {
    echo $baglan->error;
}



 ?>
