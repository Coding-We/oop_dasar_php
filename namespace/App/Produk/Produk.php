<?php 

class Produk {
          protected $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;
           
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function setJudul( $judul ) {
        
        return $this->judul = $judul;
        
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;

    }


    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);

    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

//  public function getInfoProduk();
    
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
      }
    }
