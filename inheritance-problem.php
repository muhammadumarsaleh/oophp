<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;
        
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 250000)
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ( $this->tipe == "Komik" ) {
            $str .=  "- {$this->jmlHalaman} Halaman.";
        } else if ( $this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 250000, 100, null, "Komik" );
$produk2 = new Produk( "Stick War", "James clear", "Garena", 130000, null, 50, "Game" );


echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";

// $InfoProduk1 = new CetakInfoProduk();
// echo $InfoProduk1->cetak($produk1);




