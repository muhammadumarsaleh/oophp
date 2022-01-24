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

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "One Piece";
// var_dump($produk2->judul);

$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 250000 );

$produk2 = new Produk( "Stick War", "James clear", "Garena", 130000 );

$produk3 = new Produk( "Spiderman", "Stan lee", "Marvel Studio", 199000 );

$produk4 = new Produk();

$produk5 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", 90000);

echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
echo "Film :" . $produk3->getLabel();
echo "<br>";
echo "YOSH " . $produk4->getLabel();
echo "<br>";
echo "komik :" . $produk5->getLabel();


