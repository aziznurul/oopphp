<?php



class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
    return ($str);
  }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Dreckman", "Sonny Computer", 25000, 0, 50);

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Dreckman, Sonny Computer (Rp. 25000) ~ 50 jam.


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
