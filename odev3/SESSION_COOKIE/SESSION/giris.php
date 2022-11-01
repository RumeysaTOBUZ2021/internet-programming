<?php
session_start();
$kullanici_adi = "Rümeysa";
$sifre = "se22i@n";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$form_kullanici_adi = $_POST['kullanici_adi'];
	$form_sifre = $_POST['sifre'];


	if ($form_kullanici_adi == $kullanici_adi && $form_sifre == $sifre) {
		$_SESSION['kullanici_adi'] = $form_kullanici_adi;
		$_SESSION['sifre'] = $sifre;
        echo "<br/>";        
        echo "<br/>";
		echo "Başarıyla Giriş Yaptınız. <br>";
        echo "<br/>";
		echo "Hoşgeldiniz"." ".$_SESSION['kullanici_adi']."<br/>";
        echo "<br/>";
		echo "<a href='cikis.php'>Çıkış Yap</a>";
	}else{
        echo "<br/>";
		echo "Kullanıcı Adı veya Şifreyi Yanlış girdiniz. Lütfen Tekrar Deneyin. <br>";
		echo "<br/>";
        echo "<a href='session.php'>Giriş Sayfasına Git</a>";
	}
}else
{
	header('Location: http://localhost/session.php');
	exit;
}
?>
<html>
<head>
<style>
    *{
        padding: 0;
        overflow: hidden;
        width: max-content;
        margin: auto;
    }
    echo{
        font-family: Lucida Calligraphy;
        font-size: 20pt;
    }
    
</style>
</head>
</html>
