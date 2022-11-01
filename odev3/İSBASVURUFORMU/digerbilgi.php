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
}
* {
    font-family: viking;
    font-size:18px;
    box-sizing: border-box;
}
a {
    color: #F5F5F5;
}

button {
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
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
    width: 245px;
    height: 35px;
}      
    </style>
</head>
<body>
<table align="center"id="egitim" class="table table-condensed">
<br/>

<tr><td align="center">Çalışmak İstenilen Pozisyon : <textarea name="pozisyon"></textarea><br/></td></tr>

<tr>
<td align="center">Çalışmak İstediğiniz Alan : <input type ="checkbox" name="php"/> Php <input type ="checkbox" name="html"/> Html <input type ="checkbox" name="sql"/> Sql <input type ="checkbox" name="dd"/> Diğer Diller <br/></td>
</tr><br/>
<tr></tr><td></td><tr></td><td></tr><tr></tr><td></td><tr></td><td></tr>
<tr><td align="center">Yabancı Dilleriniz : <textarea name="dil"></textarea><br/></td></tr>

<tr>
<td align="center">Bilgisayar Bilgisi : 
<input type="radio" name="bb" value="1" /> Çok İyi <input type="radio" name="bb" value="2" /> İyi <input type="radio" name="bb" value="3" /> Orta <input type="radio" name="bb" value="4" /> Az
<br/></td>
</tr>
<tr></tr><td></td><tr></td><td></tr><tr></tr><td></td><tr></td><td></tr>
<tr><br/>
<td align="center">Eklemek İstedikleriniz : <textarea name="adres"></textarea><br/>
</td>
</tr>

<td align="center"><button type="submit"><a href="gonder.php" class="ca">Gönder</a></button></td>

</table>

</body>
</html>