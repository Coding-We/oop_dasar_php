<?php 

class Produk {
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";
        $waktuMain = 0;
        $jumlahHalaman = 0;
        $tipe = "tipe";

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = 
        "penerbit", $harga = "harga" $penerbit = "penerbit", $harga = "harga", $waktuMain = 0, $jumlahHalaman = 0, $tipe) {

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->waktuMain = $waktuMain;
            $this->jumlahHalaman = $jumlahHalaman;
            $this->tipe = $tipe;

        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoLengkap() {
            // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
            // Game : Uncharted | Neil Druckman, Sony Computer (Rp. 25000) - 50 Jam
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            if ($this->tipe == "Komik") {
                $str .= " - {$this->jumlahHalaman} Halaman";
            } else if ($this->tipe == "Game") {
                $str .= " - {$this->waktuMain} Jam";
            }

            return $str;
            
        }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000", 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", "25000", 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 25000) - 50 Jam
