<?php
require_once('Produit.php');
class ProduitKilo extends Produit{

	private $prixkg;

	public function __construct($poids,$q){
			echo "<br> Creation d'un produit kilo";
			parent::__construct($poids,$q);
			$this->prixkg = 1;
	}


	public function __toString(){
		return "<br> poids : ".$this->poids.
			   "<br> quantité : ".$this->q.
				"<br> prix au kilo : ".$this->prixkg; 	
	}

	public function lirePrixkg(){
         return $this->prixkg;
      }
   	public function ecrireRayon($pkg){
         $this->prixkg=$pkg;
      }

	public function prixkilo(){
		return floor($this->poids*$this->prixkg);
	}

}