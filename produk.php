<?php 

class Produk {
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";

      

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
}


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "25000";


echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();
