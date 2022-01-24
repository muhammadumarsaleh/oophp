
<!-- BELUM SELESAI -->

<?php

abstract class Produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;  

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


    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon()  {
        return $this->diskon;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class CetakInfoProduk{
    public $daftarProduk = array();

    public function tambah( Produk $produk ) {
        $this->daftarProduk[] = $produk;

    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        
        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
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


}

// $produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 250000, 250000);
// $produk2 = new Game( "Stick War", "James clear S.pd", "Garena Production", 250000, 12000);

// $cetakProduk = new cetakInfoProduk;
// $cetakProduk->tambah($produk1);
// $cetakProduk->tambah($produk2);
// echo $cetakProduk->cetak();

$produk = new Produk();