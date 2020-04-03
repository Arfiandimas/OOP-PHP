<?php 


// Jualan Produk
// Komik
// Game
class Produk{ //Class

	public  $judul, 
			$penulis, 
			$penerbit, 
			$harga,
			$jmlHalaman,
			$waktuMain; //Properti

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getLabel() { //Method
		return "$this->penulis, $this->penerbit";  // $this untuk mengambil properi diluar function 
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";

		return $str;
	}

}

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

		return $str;	
	}
}

// class CetakInfoProduk {
// 	public function cetak( Produk $produk ){
// 		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
// 		return $str;
// 	}
// }

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 160, 0);

$produk2 = new Game("Burnout Taekdown", "Neil Druckmann", "Sony Computer", 600000, 0, 50);


// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 60000) - 160 Halaman.
// Game : Burnout Taekdown | Neil Druckmann, Sony Computer (Rp. 600000) ~ 50 Jam

echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();
?>