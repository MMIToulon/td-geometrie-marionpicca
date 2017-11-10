<?php
	ini_set('display_errors','1');

	require_once("ProduitUnite.php");

	$pk = new ProduitUnite();
	echo $pu;

	$pk->poids = 2 ;
	$pk->prixunit = 1;

	echo $pu;

	$prixu = $c->prixunit();	
	echo "<br><br> Le prix est : ".$prixunit;

?>