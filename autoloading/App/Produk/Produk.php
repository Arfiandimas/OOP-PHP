<?php 

abstract class Produk{ //Class

	protected  $judul, 
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

	abstract public function getInfo();
}
