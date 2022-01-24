<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit;
    protected $diskon = 0;
    private $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

}

class Game extends Produk{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
    parent::__construct($judul, $penulis, $penerbit, $harga );
    $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

}

$produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 250000, 250000);
$produk2 = new Game( "Stick War", "James clear S.pd", "Garena Production", 250000, 12000);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

echo "<hr>";

$produk1->setDiskon(25);
$produk2->setDiskon(50);

echo $produk1->getHarga();
echo "<br>";
echo $produk2->getHarga();






