<?php
$dosya = $_SERVER['REQUEST_URI'];
if (strstr($dosya, "robots.php")) {
	header("Location: robots.txt");
}
require_once 'Mobile_Detect.php';
$tarayici = new Mobile_Detect;
header('Content-type: text');
if ($tarayici->isMobile()==TRUE || $tarayici->isTablet()==TRUE) {
	readfile('robots-mobile.txt');								//Mobil Robots.txt için robots-mobile.txt dosyasını düzenleyebilirsiniz.
}
else
{
	readfile('robots-desktop.txt');								//Masaüstü Robots.txt için robots-desktop.txt dosyasını düzenleyebilirsiniz.
}
?>