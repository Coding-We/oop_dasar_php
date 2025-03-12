<?php

require_once 'App/init.php';

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
