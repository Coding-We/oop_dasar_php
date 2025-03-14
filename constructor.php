<?php 

class Produk {
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", "25000");
$produk3 = new Produk("Dragon Ball", "Akira Toriyama", "Shonen Jump", "30000");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
