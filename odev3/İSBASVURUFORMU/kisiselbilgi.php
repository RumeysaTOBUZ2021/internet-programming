<?php
?>
<html>
<head>
<meta charset="utf-8">
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
<table align="center" class="table table-responsive">
            <tr>
                <td><h1 align="center">İŞ BAŞVURU FORMU</h1><td>
            <tr>
                <td align="center">Ad ve Soyad : <input type="text" name="adSoyad" class="form-control" placeholder="Adınız ve Soyadınız" required/></td>
            </tr>
            <tr>
                <td align="center">Doğum Yeri : <input type="text" name="dyeri" class="form-control" placeholder="İl/İlçe" required/></td>
            <tr>
            <tr>
                <td align="center">Doğum Tarihi : <input type="text" name="dtarihii" class="form-control" placeholder="Gün/Ay/yıl" required/></td>
            <tr>
                <td align="center">Mail Adresi : <input type="mail" name="mail" class="form-control" placeholder="ornek@gmail.com" required/></td>
            </tr>
            <tr>
                <td align="center">Cep Telefon Numarası : <input type="text" name="cnumara" class="form-control" placeholder="(5__)_______" required/></td>
            </tr>
            <tr>
                <td align="center">Adres : <br/>
                    <textarea align="center" class="form-control" name="adres" placeholder="Mahalle , Sokak / Cadde , NO , İL , İLÇE" id="adres" rows="3" required></textarea></td>
            </tr>
            <td><button type="submit"><a href="egitimbilgi.php" class="ca">İleri</a></button></td>
</body>
</html>