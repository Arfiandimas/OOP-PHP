<?php 


// Jualan Produk
// Komik
// Game
class Produk{ //Class

	public  $judul, 
			$penulis, 
			$penerbit, 
			$harga; //Properti

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() { //Method
		return "$this->penulis, $this->penerbit";  // $this untuk mengambil properi diluar function 
	}

}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);

$produk2 = new Produk("Burnout Taekdown", "Neil Duckmann", "Sony Computer", 600000);

$produk3 = new Produk("Tsubasa");

echo "Komik : " .$produk1->getLabel();
echo '<br>';
echo "Game : " .$produk2->getLabel();
echo '<br>';
var_dump($produk3);
?>