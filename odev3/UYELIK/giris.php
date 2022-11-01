<?php
session_start();
$kullanici_adi = "RümeysaTOBUZ";
    $sifre = "#y2*";
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $form_kullanici_adi = $_POST['kullanici_adi'];
        $form_sifre = $_POST['sifre'];
    
    
        if ($form_kullanici_adi == $kullanici_adi && $form_sifre == $sifre) {
            $_SESSION['kullanici_adi'] = $form_kullanici_adi;
            $_SESSION['sifre'] = $sifre;
            header('Location: http://localhost/UYELIK/hosgeldinekrani.php');

        }else{
            echo "<br/>";
            echo "Kullanıcı Adı veya Şifreyi Yanlış Girdiniz. Lütfen Tekrar Deneyin. <br>";
            echo "<br/>";
            echo "<a href='girisekrani.php'>Giriş Sayfasına Git</a>";
        }
    }else
    {
        header('Location: http://localhost/UYELIK/giris.php');
        exit;
    }
?>
<html>
<head>
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
    font-family: sans-serif;
    box-sizing: border-box;
}

form {
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
}
.echo{
    text-align: center;
    margin-bottom: 40px;
    font-family:viking;
    color: #F5F5F5;
}
a {
    color: #F5F5F5;
}
input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
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

.error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}

.success {
    background: #D4EDDA;
    color: #40754C;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
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
    color: #444;
}

.ca:hover {
    text-decoration: underline;
}   
</style>
</head>
<body>
</body>
</html>
