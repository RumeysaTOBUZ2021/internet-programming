<?php 
session_start();

$kullanici_adi = "RümeysaTOBUZ";
$sifre = "#y2*";
$_SESSION["kullanici_adi"] = "RümeysaTOBUZ";
$_SESSION["sifre"] = "#y2*";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ana Sayfa</title>
    <style>
body {
    background: #354733;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}
* {
    font-family: viking;
    box-sizing: border-box;
}
a {
    color: #ffffff;
}
button {
    float: right;
    background: #B99274;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}
button:hover {
    opacity: .7;
}
h1 {
    text-align: center;
    color: #fff;
}
.ca {
    font-size: 14px;
    display: inline-block;
    padding: 10px;
    text-decoration: none;
    color: #F5F5F5;
}
.ca:hover {
    text-decoration: underline;
}    
    </style>
</head>
<body>
     <h1>Merhaba, <?php echo $_SESSION['kullanici_adi']; ?></h1>
     <button type="submit"><a href="cikisekrani.php" class="ca">Çıkış Yap</a></button>
</body>
</html>
