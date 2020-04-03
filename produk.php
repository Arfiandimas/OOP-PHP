<?php 


// Jualan Produk
// Komik
// Game
class Produk{ //Class

	public  $judul = "Judul", 
			$penulis = "Penulis", 
			$penerbit = "Penerbit", 
			$harga = 13000; //Properti

	public function getLabel() { //Method
		return "$this->penulis, $this->penerbit";  // $this untuk mengambil properi diluar function 
	}

}

// $produk1 = new Produk(); //Object
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk(); //Object
// $produk2->judul = "Battlefield";
// $produk2->tambahProperty = "Tambahan Properti"; //Tambah Properti di class Produk
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 120000;

$produk4 = new Produk();
$produk4->judul = "Burnout Taekdown";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 400000;

echo "Komik : " .$produk3->getLabel();
echo '<br>';
echo "Game : " .$produk4->getLabel();
?>