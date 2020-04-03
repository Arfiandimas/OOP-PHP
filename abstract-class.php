<?php 


// Jualan Produk
// Komik
// Game
abstract class Produk{ //Class

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

	abstract public function getInfoProduk();

	public function getInfo() {
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
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman."; // ". xx ." (concat).

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
		$str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam."; // ". xx ." (concat).

		return $str;	
	}
}

class CetakInfoProduk {
	public $daftarProduk = array();


	public function tambahProduk( Produk $produk ) {
		$this->daftarProduk[] = $produk;
	}


	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 160);

$produk2 = new Game("Burnout Taekdown", "Neil Druckmann", "Sony Computer", 600000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();