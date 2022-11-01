<?php
setcookie("kullanici_adi", $kullanici_adi, time()+60*60*24*30,"/SESSION/"); 

if (isset($_COOKIE['kullanici_adi'])) {
    echo $_COOKIE['kullanici_adi'];
}
setcookie("kullanici_adi", "", time() - 1);
?>
