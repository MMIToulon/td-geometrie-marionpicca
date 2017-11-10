<?php 


abstract class Produit 
{

   protected $type = fruit;
   protected $poids = 3;
   protected $q = 2;

	public function __construct($poids, $q) {
      echo "Construction d'un produit";
	}

   public function lirepoids(){
         return $this->poids;
      }
   public function ecrirepoids($poids){
         $this->poids=$poids;
      }
   public function lireq(){
         return $this->q;
      }
   public function ecrireY($q){
         $this->q = $q;
      }

   public abstract function prixkilo();   
   public abstract function prixunitaire();   

}

?>

