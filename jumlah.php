<?php 

class matematika{
	public $bil1,$bil2;

	function set_penjumlahan($bilangan1,$bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
		echo "<h3>Perhitungan bilangan 21 dengan bilangan 3 </h3>".'<br>'.'<br>';

	}

	function set_pengurangan($bilangan1,$bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}

	function set_perkalian($bilangan1,$bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
		
	}

	function set_pembagian($bilangan1,$bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;

	}
	function get_penjumlahan(){
		return $this->bil1 + $this->bil2;
	}
	function get_pengurangan(){
		return $this->bil1 - $this->bil2;
	}
	function get_perkalian(){
		return $this->bil1 * $this->bil2;
	}
	function get_pembagian(){
		return $this->bil1 / $this->bil2;
	}
}

	
		$penjumlahan1 = new matematika;
		$penjumlahan1->set_penjumlahan(21,3);
		echo "<h3>Hasil Penjumlahan  :</h3>  " .$penjumlahan1->get_penjumlahan().'<br>'.'<br>';
		$pengurangan1 = new matematika;
		$pengurangan1->set_pengurangan(21,3);
		echo "<h3>Hasil pengurangan  : </h3> " .$pengurangan1->get_pengurangan().'<br>'.'<br>';
		$perkalian1 = new matematika;
		$perkalian1->set_perkalian(21,3);
		echo "<h3>Hasil perkalian  : </h3> " .$perkalian1->get_perkalian().'<br>'.'<br>';
		$pembagian1 = new matematika;
		$pembagian1->set_pembagian(21,3);
		echo "<h3>Hasil pembagian  : </h3> " .$pembagian1->get_pembagian().'<br>'.'<br>';

		?>