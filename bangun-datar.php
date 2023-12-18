<?php

abstract class BangunDatar {
    abstract function luas();
    abstract function keliling();
}



//kita pake inheritance atau turunan
//hitung lingkaran
/**
 * Menghitung bangun datar Lingkaran
 */
 
class Lingkaran extends BangunDatar {
    private $jari2;
	
    function __construct($jari2){
        $this->jari2 = $jari2;
    }

	function __destruct() 
	{
        return true; //hancurkan
    }
	
    function luas(){                       //pi nya 3.14
        echo "Luas ". get_class(). " : ". (3.14 * pow($this->jari2,2)). "\n";
    }
	
    function keliling(){
        echo "Keliling ". get_class(). " : ". (2 * 3.14 * $this->jari2). "\n";
    }
	
		
}


/**
 * Menghitung bangun datar Persegi
 */
class Persegi extends BangunDatar {
    private $sisi;

    function __construct($sisi){
        $this->sisi = $sisi;
    }
	
	function __destruct() 
	{
        return true;   //hancurkan 
    }
	
    function luas(){
        echo "Luas ". get_class(). " : ". ($this->sisi * $this->sisi). "\n";
    }
    function keliling(){
        echo "Keliling ". get_class(). " : ". (4*$this->sisi). "\n";;
    }
}


/**
 * Menghitung bangun datar Persegi Panjang
 */

class PersegiPanjang extends BangunDatar {
    private $panjang;
    private $lebar;
    
    function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
	
	function __destruct() 
	{
        return true;   //hancurkan 
    }
	
    function luas(){
        echo "Luas ".get_class(). " : ".($this->panjang*$this->lebar). "\n";
    }
    function keliling(){
        echo "Keliling ". get_class(). " : ". ((2*$this->panjang) + (2*$this->lebar)). "\n";
    }
}


//panggil
// jari jari = 10
$lingkaran = new Lingkaran(10);

$lingkaran->luas();   
echo '</br>';
$lingkaran->keliling();

echo '</br><br>';

// sisi = 10
$persegi = new Persegi(10);
$persegi->luas();
echo '</br>';
$persegi->keliling();

echo '</br><br>';

// panjang = 10
// lebar = 5
$persegi_panjang = new PersegiPanjang(10,5);
$persegi_panjang->luas();
echo '</br>';
$persegi_panjang->keliling();


?>
