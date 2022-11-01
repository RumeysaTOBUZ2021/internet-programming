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
    box-sizing: border-box;
}
a {
    color: #F5F5F5;
}
input {
    display: block;
    border: 2px solid #ccc;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
    width: 355px;
}
button {
    float: left;
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
    </style>
</head>

<body>
<table align="center"id="egitim" class="table table-condensed">
<thead>
    <tr><h1 align="center">Eğitim Bilgileri</h1></tr>
<tr>
    <th>Okul Adı</th>
    <th>Okul Mezun Yılı</th>
</tr>
</thead>

<tbody>
<tr>
    <td><input id="okul_adi_" name="okul_adi[]" type="text" class="form-control" required></td>
    <td><input id="mezun_yili_" name="mezun_yili[]" type="text" class="form-control" required></td>
</tr>
<tr>
    <td><input id="okul_adi_" name="okul_adi[]" type="text" class="form-control" required></td>
    <td><input id="mezun_yili_" name="mezun_yili[]" type="text" class="form-control" required></td>
</tr>
<tr>
    <td><input id="okul_adi_" name="okul_adi[]" type="text" class="form-control" required></td>
    <td><input id="mezun_yili_" name="mezun_yili[]" type="text" class="form-control" required></td>
</tr>
<tr>
    <td><input id="okul_adi_" name="okul_adi[]" type="text" class="form-control" required></td>
    <td><input id="mezun_yili_" name="mezun_yili[]" type="text" class="form-control" required></td>
</tr>
<tr>
    <td><input id="okul_adi_" name="okul_adi[]" type="text" class="form-control" required></td>
    <td><input id="mezun_yili_" name="mezun_yili[]" type="text" class="form-control" required></td>
</tr>
</tbody>           
 <td><button type="submit"><a href="tecrubebilgi.php" class="ca">İleri</a></button></td>

</body>
</html>