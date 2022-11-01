<?php
session_start();
?>

<html>
<head>
<title>Üye Girişi</title>
<style>
        *{
            padding: 0;
            overflow: hidden;
        }
        html, body {
            height: 100%;
        }
        form{
            width: max-content;
            margin: auto;
        }
        input{
            display: block;
            font-size: 10pt;
            width: 350px;
            padding: 12px 30px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Lucida Calligraphy;
        }
        .giris{
            font-family: Lucida Calligraphy;
            font-size: 12pt;
            color: black;
            width: max-content;
            padding: 10px 150px;
            margin: 20px auto;
            border-radius: 10px;
            background-color: green;
        }
        
    </style>
</head>
<body>
<form action="giris.php" method="post">
		<label>Kullanıcı Adı:</label>
		<input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı --> Rümeysa" >
		<label>Şifre:</label>
		<input type="password" name="sifre" placeholder="Şifre --> se22i@n">
		<button type="submit">Giriş Yap</button>
	</form>
<?php
$_SESSION["isim"] = "Rümeysa";
$_SESSION["soyisim"] = "TOBUZ";
?>
</body>
</html>