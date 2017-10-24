<?php 
require_once 'robot.php';

$robot1 = new robot('ikeh ikeh');
$robot2 = new robot('aw aw aw');

$robot1->set_suara('ikeh ikeh');
$robot1->set_berat(50);


echo "Bunyi dari robot 1 adalah :  " .$robot1-> get_suara().'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp' . 'Dan beratnya adalah ' .$robot1-> get_berat().'kg'.'</br>';


$robot2->set_suara('kimochi kimochi');
$robot2->set_berat(60);


echo "Bunyi dari robot 2 adalah " .$robot2-> get_suara().'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'Dan beratnya adalah ' .$robot2-> get_berat().'kg'.'</br>';
?>