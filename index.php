</html>
<?php

$username =  (!empty($_GET['username']));
$password =  (!empty($_GET['password']));
$id =  (!empty($_GET['id']));


$baglan = mysqli_connect('localhost', 'root', '', 'db');
    if ($baglan) {
        $sql="SELECT * FROM tablo";
        $vericek=mysqli_query($baglan,$sql);
        while( $veriler=mysqli_fetch_array($vericek,MYSQLI_ASSOC) ){
        echo "ID : ".$veriler["id"]." Kullanıcı Adı : ".$veriler["username"]." Şifre : ".$veriler["password"].'<br>';
        }

    } else {
        die('Bağlantı başarısız :'. mysql_error());
    }


 ?>
