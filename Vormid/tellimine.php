<?php

//ECHO <PRE>;
//print_r($_GET);
//lisab vormist saadud andmed muutujasse
	$toode1 = $_GET['t1'];
	echo 'Toode 1: '.$toode1.'tk';
//lisab vormist saadud andmed muutujasse
//$toode2 = $_GET['t2'];
//echo 'Toode 2: '.$toode2.'tk';
//$toode3 = $_GET['t3'];
//echo 'Toode 3: '.$toode3.'tk';

function silindriRuumala($raadius, $korgus){
	$pohjaPindala = pi() * $raadius * $raadius;
	$ruumala = $pohjaPindala * $korgus;
	return $ruumala;
}

$sr = $_GET['sr'];
$sk = $_GET['sk'];


$silindriRuumala = silindriRuumala($sr, $sk);
echo 'Silinder raadiusega '.$sr.' ja kõrgusega '.$sk.' on ruumalaga'.$silindriRuumala.'<br>';
?>
