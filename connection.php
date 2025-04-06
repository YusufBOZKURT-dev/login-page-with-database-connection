<?php
$sunucu = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "evil_twin";

// Bağlantıyı oluştur
$baglanti = new mysqli($sunucu, $kullanici, $sifre, $veritabani);
?>