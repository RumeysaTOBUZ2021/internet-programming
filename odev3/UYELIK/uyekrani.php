<?php
session_start();
?>

<html>
<head>
<title>Üye Girişi</title>
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
    background: #F5F5F5;
    border-radius: 15px;
}

h2 {
    text-align: center;
    margin-bottom: 40px;
    font-family:viking;
}

a {
    color: #ffffff;
}
input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
    background:#F5F5F5;
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
    <form action="giris.php" method="post">
        <h2>Üye Girişi Yap</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı">
        <br/>
		<input type="password" name="sifre" placeholder="Şifre"><br/>
		<button type="submit">Giriş Yap</button>
		<a href="kayitekrani.php" class="ca">Hesap Oluştur</a>
	</form>
<?php
$_SESSION["kullanici_adi"] = "RümeysaTOBUZ";
$_SESSION["sifre"] = "#y2*";
?>
</body>
</html>