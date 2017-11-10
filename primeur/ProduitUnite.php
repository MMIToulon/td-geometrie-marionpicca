<?php
require_once('Produit.php');
abstract class ProduitUnite extends Produit{

	private $prixkg;

	public function __construct($poids,$q){
			echo "<br> Creation d'un produit unitaire";
			parent::__construct($poids,$q);
			$this->prixunit = 2;
	}


	public function __toString(){
		return "<br> poids : ".$this->poids.
			   "<br> quantité : ".$this->q.
				"<br> prix à l'unité : ".$this->prixunit; 	
	}

	public function lirePrixunit(){
         return $this->prixunit;
      }
   	public function ecrireRayon($pu){
         $this->prixunit=$pu;
      }

	public function prixunitaire(){
		return floor($this->q*$this->prixunit);
	}

}