<?php 


// Jualan Produk
// Komik
// Game
class Produk{ //Class

	private  $judul, 
			$penulis, 
			$penerbit,
			$harga,
			$diskon = 0; //Properti

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul( $judul ) { //setter
		if( !is_string($judul)){
			throw new Exception('Judul harus String');
		}
		$this->judul = $judul;
	}

	public function getJudul() { //getter
		return $this->judul;
	}

	public function setPenulis( $penulis ) { //setter
		if( !is_string($penulis)){
			throw new Exception('Penulis harus String');
		}
		$this->penulis = $penulis;
	}

	public function getPenulis() { //getter
		return $this->penulis;
	}

	public function setPenerbit( $penerbit ) { //setter
		if( !is_string($penerbit)){
			throw new Exception('Penerbit harus String');
		}
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() { //getter
		return $this->penerbit;
	}

	public function setHarga( $harga ) { //setter
		if( !is_integer($harga)){
			throw new Exception('Harga harus Integer');
		}
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon /100 );
	}

	public function setDiskon( $diskon ){
		if ( !is_integer($diskon)) {
			throw new Exception('Diskon harus Integer');
		}
		$this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
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
echo "<hr>";

$produk1->setJudul("Son Goku");
echo $produk1->getJudul();
echo '<br>';

$produk1->setPenulis("Barjono");
echo $produk1->getPenulis();
echo '<br>';

$produk1->setPenerbit("Erlangga");
echo $produk1->getPenerbit();
echo '<br>';

$produk1->setDiskon(50);
$produk1->setHarga(400000);
echo $produk1->getHarga();
echo '<br>';
echo $produk1->getDiskon();
echo '<br>';

echo '<hr>';

// $produk2->setJudul("Son Goku");
echo $produk2->getJudul();
echo '<br>';

// $produk2->setPenulis("Barjono");
echo $produk2->getPenulis();
echo '<br>';

// $produk2->setPenerbit("Erlangga");
echo $produk2->getPenerbit();
echo '<br>';

// $produk2->setDiskon(50);
// $produk2->setHarga(400000);
echo $produk2->getHarga();
echo '<br>';
echo $produk2->getDiskon();
echo '<br>';
?>