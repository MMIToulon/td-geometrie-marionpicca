<?php
	ini_set('display_errors','1');

	require_once("ProduitKilo.php");

	$pk = new ProduitKilo();
	echo $pk;

	$pk->poids = 2 ;
	$pk->prixkg = 1;

	echo $pk;

	$prixk = $c->prixkilo();	
	echo "<br><br> Le prix est : ".$prixkg;

?>