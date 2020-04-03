<?php 

// define('NAMA', 'Arfian Dimas Andi Permana');
// echo NAMA;

// echo '<br>';

// const UMUR = 22;
// echo UMUR;

 
// class Coba {
// 	public function jajal()	{
// 		return NAMA;
// 	}
// }
// echo Coba::jajal();

// echo __FILE__;



// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$tampil = new Coba();
echo $tampil->kelas;