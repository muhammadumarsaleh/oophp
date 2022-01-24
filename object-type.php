<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 250000 );

$produk2 = new Produk( "Stick War", "James clear", "Garena", 130000 );

$produk3 = new Produk( "Spiderman", "Stan lee", "Marvel Studio", 199000 );



echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
echo "Film :" . $produk3->getLabel();
echo "<br>";

$InfoProduk1 = new CetakInfoProduk();
echo $InfoProduk1->cetak($produk1);




