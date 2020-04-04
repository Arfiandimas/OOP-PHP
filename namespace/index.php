<?php 

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 160);

$produk2 = new Game("Burnout Taekdown", "Neil Druckmann", "Sony Computer", 600000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
echo '<hr>';


use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo '<br>';
new ServiceUser();