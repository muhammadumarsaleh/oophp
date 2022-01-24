<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;
        
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";


        return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }

}

class Game extends Produk{
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;

    }
}

$produk1 = new Komik( "Sasuke", "Masashi Kishimoto", "Shonen Jump", 250000, 100, 0);
$produk2 = new Game( "Stick War", "James clear S.pd", "Garena Production", 130000, 0, 50);
$produk3 = new Game("Mario Bross", "Jack Sparrow", "PSP Studio Game", 150000, 0, 10);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();


// $InfoProduk1 = new CetakInfoProduk();
// echo $InfoProduk1->cetak($produk1);




