<?php 

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $waktuMain,
            $jumlahHalaman;
    

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = 
        "penerbit", $harga = "harga" $penerbit = "penerbit", $harga = "harga", $waktuMain = 0, $jumlahHalaman = 0) {

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->waktuMain = $waktuMain;
            $this->jumlahHalaman = $jumlahHalaman;
           

        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
            
        }
}


class Komik extends Produk {
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jumlahHalaman} Halaman.";
        return $str;

    }
        
}

class Game extends Produk {
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam";
        return $str;
}


class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
      }
    }

}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000", 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", "25000", 0, 50);


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 25000) - 50 Jam
