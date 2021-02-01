<?php
  class Mproduit{
      public $idann;
      public $iduti;
      public $idcat;
      public $idmon;
      public $idimg;
      public $prix;
      public $quantite;
      public $preciser;
      public $description;
      public $negociable;
      public $etat;
      public $activated;
      public $paye;
      public $livraison;
      public $dateaj;
      public $dateup;

      public function __construct(){
        $this->idann="";
        $this->iduti="";
        $this->idcat="";
        $this->idmon="";
        $this->idimg="";
        $this->prix="";
        $this->prix="";
        $this->quantite="";
        $this->description="";
        $this->negociable="";
        $this->etat="";
        $this->activated="";
        $this->paye="";
        $this->livraison="";
        $this->dateaj="";
        $this->dateup="";
      }
  }


?>
