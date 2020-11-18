<?php

class Produk {
    public $judul,  
           $penulis, 
           $penerbit,
           $harga ;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit  = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


$produk1 = new Produk("naruto", "petershaan", "gramedia", 30000);

$produk2 = new Produk("uncharted", "galih", "playstore", 25000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
