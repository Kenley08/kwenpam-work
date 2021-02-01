<?php 
    require_once '../../api/Modele/Mconnexion.php';
    require_once '../../api/Modele/Mproduit.php';
    require_once '../../api/Dao/produitDao.php';
   ini_set('display_errors', 'Off');

    //creation Dao
    $produit=new produitDao();
         //on passe l'objet des atrributs
         $id=time()."".rand(1,100);
         $produit->idann=$id;
         $produit->iduti='33234232122';
         $produit->idcat=1;
         $produit->idmon=1;
         $produit->idimg='331313131331';
         $produit->prix=50;
         $produit->quantite=5;
         $produit->preciser='chemiz';
         $produit->description='Bel chemiz pou gason';
         $produit->negociable=0;
         $produit->etat=0;
         $produit->activated=0;
         $produit->paye=1;
         $produit->livraison=0;
         $produit->dateaj="";
         $produit->dateup="";

         $p=produitDao::add($produit);
         if($p){
             echo "ajoute";
         }else{
            echo " non ajoute";
         }


        
?>