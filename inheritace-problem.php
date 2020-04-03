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
			$waktuMain,
			$tipe; //Properti

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel() { //Method
		return "$this->penulis, $this->penerbit";  // $this untuk mengambil properi diluar function 
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
		if($this->tipe == "Komik") {
			$str = $str .= " - {$this->jmlHalaman} Halaman.";
		}elseif ($this->tipe == "Game") {
			$str = $str .= " - {$this->waktuMain} Jam.";
		}

		return $str;
	}

}


class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 160, 0, "Komik");

$produk2 = new Produk("Burnout Taekdown", "Neil Druckmann", "Sony Computer", 600000, 0, 50, "Game");


// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 60000) - 160 Halaman.
// Game : Burnout Taekdown | Neil Druckmann, Sony Computer (Rp. 600000) ~ 50 Jam

echo $produk1->getInfoLengkap();
echo '<br>';
echo $produk2->getInfoLengkap();
?>