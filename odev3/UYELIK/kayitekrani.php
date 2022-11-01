<!DOCTYPE html>
<html>
<head>
	<title>Kayıt Ol</title>
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
     <form action="" method="post">
     	<h2>Kayıt Ol</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['isim'])) { ?>
               <input type="text" 
                      name="isim" 
                      placeholder="Ad Soyad"
                      value="<?php echo $_GET['isim']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="isim" 
                      placeholder="Ad Soyad"><br>
          <?php }?>

          <?php if (isset($_GET['kullanici_adi'])) { ?>
               <input type="text" 
                      name="kullanici_adi" 
                      placeholder="Kullanıcı Adı"
                      value="<?php echo $_GET['kullanici_adi']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="kullanici_adi" 
                      placeholder="Kullanıcı Adı"><br>
          <?php }?>

     	<input type="password" 
                 name="sifre" 
                 placeholder="Şifre"><br>

          <input type="password" 
                 name="tekrarsifre" 
                 placeholder="Şifre Tekrar"><br>

     	<button type="submit">Kayıt Ol</button>
          <a href="uyekrani.php" class="ca">Zaten hesabın var mı?</a>
     </form>
</body>
</html>