<?php
// Class
class Produk
{
  // Properties -> Variabel
  public $judul = "judul",
    $penulis    = "penulis",
    $penerbit   = "penerbit",
    $harga      = 0;

  // Methods -> Fungsi
  function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}


// Object / Instance(Wujud dari kelas)
$produk3           = new Produk();
$produk3->judul    = "One Piece";
$produk3->penulis  = "Eiichiro Oda";
$produk3->penerbit = "Shueisha · Viz Media";
$produk3->harga    = 58300;

$produk4           = new Produk();
$produk4->judul    = "Mobile Legend";
$produk4->penulis  = "Justin Yuan";
$produk4->penerbit = "Moonton";
$produk4->Harga    = "Free";

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();
