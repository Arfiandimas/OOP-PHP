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


class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);

$produk2 = new Produk("Burnout Taekdown", "Neil Duckmann", "Sony Computer", 600000);

echo "Komik : " .$produk1->getLabel();
echo '<br>';
echo "Game : " .$produk2->getLabel();
echo '<br>';

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);
?>