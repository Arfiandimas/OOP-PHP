<?php 


// Jualan Produk
// Komik
// Game
class Produk{ //Class

	public  $judul, 
			$penulis, 
			$penerbit;

	protected $diskon = 0;

	private $harga; //Properti

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon /100 );
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
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk() {
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman."; // ". xx ." (concat).

		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){

		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->waktuMain = $waktuMain;
	}

	public function setDiskon( $diskon ){
		$this->diskon = $diskon;
	}

	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam."; // ". xx ." (concat).

		return $str;	
	}
}

class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 160);

$produk2 = new Game("Burnout Taekdown", "Neil Druckmann", "Sony Computer", 600000, 50);


// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 60000) - 160 Halaman.
// Game : Burnout Taekdown | Neil Druckmann, Sony Computer (Rp. 600000) ~ 50 Jam

echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();
echo "<hr>";

echo "Harga Normal " . $produk2->getHarga();
echo '<br>';

$produk2->setDiskon(99);
echo "Harga Diskon " . $produk2->getHarga();
?>