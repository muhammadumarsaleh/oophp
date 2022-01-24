<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0 ;

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

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 7000;

$produk4 = new Produk();
$produk4->judul = "Onet";
$produk4->penulis = "william jr";
$produk4->penerbit = "onet.net";
$produk4->harga = 10000 ;

echo "Komik :" . $produk3->getLabel();
echo "<br>";
echo "Game :" .$produk4->getLabel();


