<?php
class bangundatar{
	public $panjang,$lebar,$sisi,$alas,$tinggi;


	function set_luaspersegi($bilangan1,$bilangan2,$s){
		$this->sisi1  = $s;
		 echo "<h1>Perhitungan bangun datar </h1>".'<br>';
		 echo "=====================================";
	}
	function get_luaspersegi(){
		return $this->sisi1 * 4;
	}
	function set_kelilingpersegi($s){
		$this->sisi1 = $s;
	}
	function get_kelilingpersegi(){
		return $this->sisi1 * 4;
	}
	function set_luaspersegipanjang($bilangan1,$bilangan2){
		$this->panjang1 = $bilangan1;
		$this->lebar2 = $bilangan2;
	}
	function get_luaspersegipanjang(){
		return $this->panjang1 * $this->lebar2;
	}

	function set_luassegitiga($bilangan1,$bilangan2){
		$this->alas1 = $bilangan1;
		$this->tinggi2 = $bilangan2;
	}
	function get_luassegitiga(){
		return $this->alas1 * $this->tinggi2 / 2;
	}
	
	
	
}
	    $persegi1 = new bangundatar;
		$persegi1->set_luaspersegi(5,5);
		$persegi1->set_keliingpersegi(5);
		echo "<h2>1.Persegi</h2>";
		echo "Panjang sisi : 5".'<br>';
		echo "Rumus S * S";
		echo "<h4>Kelilig dari persegi tersebut :</h4>  " .$persegi1->get_keliingpersegi().'<br>'.'<br>';
		echo "<h4>Luas dari persegi tersebut :</h4>  " .$persegi1->get_luaspersegi().'<br>'.'<br>';
		echo "=====================================";
		
		$persegipanjang1 = new bangundatar;
		$persegipanjang1->set_luaspersegipanjang(20,5);
		echo "<h2>2.Persegi Panjang</h2>";
		echo "Panjang sisi : 20 dan panjang lebar : 5".'<br>';
		echo "Rumus  p * l";
		echo "<h4>Luas dari persegi panjang tersebut  : </h4> " .$persegipanjang1->get_luaspersegipanjang().'<br>'.'<br>';
		echo "=====================================";
		
		$segitiga1 = new bangundatar;
		$segitiga1->set_luassegitiga(2,20,5);
		echo "<h2>3.Segitiga</h2>";
		echo "Alas : 20  Tinggi :5".'<br>';
		echo "Rumus a * t /2";
		echo "<h4>Luas dari segitiga tersebut  : </h4> " .$segitiga1->get_luassegitiga().'<br>'.'<br>';
		echo "=====================================";

		?>