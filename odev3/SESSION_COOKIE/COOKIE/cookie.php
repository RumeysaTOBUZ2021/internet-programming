<?php
setcookie("ad","Rümeysa",60); 
$name = "Rümeysa";
setcookie("ad","Rümeysa",time()+(24*60*60));
if (isset($_COOKIE['ad'])) {
	echo "Adınız: ".$_COOKIE['ad'];
}else{
	echo "Cookie bulunamadı";
}
?>
