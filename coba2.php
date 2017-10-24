<?php

class robot {
	public $suara;
	public $berat;

	public function set_berat($berat){
		$this->berat = $berat;
	}
		public function get_berat(){
		return $this->berat; 
	}
}
	$robot1 = new robot;
	$robot1->set_berat(10);
	echo "Berat dari robot tersebut adalah..." .$robot1-> get_berat().'</br>';





?>