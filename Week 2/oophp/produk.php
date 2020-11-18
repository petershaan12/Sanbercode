<?php

class Produk {
    public $judul = "judul",  
           $penulis = 'penulis',
           $penerbit = "penerbit",
           $harga = "harga";

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1 -> judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul = "uncharted";
// $produk2 -> tambahProperti ="halo";
// var_dump($produk2);

$produk3 = new Produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Peter shaan";
$produk3 -> penerbit = "gramedia";
$produk3 -> harga = 300000;

$produk4 = new Produk();
$produk4 -> judul = "Uncharted";
$produk4 -> penulis = "Galih";
$produk4 -> penerbit = "playstore";
$produk4 -> harga = 240000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
