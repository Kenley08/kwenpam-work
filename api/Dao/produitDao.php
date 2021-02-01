<?php 

    class produitDao{
          //fonction pour inserer des les commandes
        public static function add($produit){
            $con=new connexion();

            $resultat=$con->executeactualisation("insert into tblannonce (Id_An,Id_Uti,Id_Cat_An,Id_Mon,Id_Img,Prix,quantite,preciser,Description,Negociable,Etat,Activated,paye,livraison,Date_Ajout,Date_Update)
            values('" . $produit->idann . "','" . $produit->iduti . "','" . $produit->idcat . "','" . $produit->idmon . "','" . $produit->idimg . "','" . $produit->prix . "','" . $produit->quantite . "',
            '". $produit->preciser . "','" . $produit->description . "','" . $produit->negociable. "',
            ". $produit->etat .",". $produit->activated .",". $produit->paye ."," . $produit->livraison .",NOW(),NOW())");
            $con->closeconnexion();
             return  $resultat;
        }

    }
?>