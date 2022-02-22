<?php
// Class
class Produk
{
  // Properties -> Variabel
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0")
  {
    $this->judul    = $judul;
    $this->penulis  = $penulis;
    $this->penerbit = $penerbit;
    $this->harga    = $harga;
  }

  // Methods -> Fungsi
  function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// Object / Instance(Wujud dari kelas)
$produk1           = new Produk("One Piece", "Eiichiro Oda", "Shueisha · Viz Media", 58300);
$produk2           = new Produk("Mobile Legend", "Justin Yuan", "Moonton", "Free");

echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
