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
<title>İş Başvuru Formu</title>
    <style>
body {
    background-image: url('pexels-steve-johnson-9872814.jpg');
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
    background: #555;
    padding: 5px 10px;
    color: #F5F5F5;
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
    color: #35648d;
    font-family:viking;
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
textarea{
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}      
    </style>
</head>
<body>
     <h1>İş Başvurunuz Başarıyla Onaylanmıştır.</h1>
     <button type="submit"><a href="kisiselbilgi.php" class="ca">Çıkış Yap</a></button>
</body>
</html>
