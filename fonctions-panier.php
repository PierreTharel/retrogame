<?php

function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['jeu_id'] = array();
      $_SESSION['panier']['prix_jeu'] = array();
      $_SESSION['panier']['type_reduc'] = array();
      $_SESSION['panier']['qte_produit'] = array();
      $_SESSION['panier']['prix_total'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}

function ajouterArticle($nom_jeu,$prix_jeu,$type_reduc,$prix_total){


if (creationPanier() && !isVerrouille())
{
   //Si le produit existe déjà on ajoute seulement la quantité
   $positionProduit = array_search($nom_jeu,  $_SESSION['panier']['jeu_id']);

   if ($positionProduit !== false)
   {
      $_SESSION['panier']['qte_produit'][$positionProduit] += $qte_produit ;
   }
   else
   {
      //Sinon on ajoute le produit
      array_push( $_SESSION['panier']['jeu_id'],$jeu_id);
      array_push( $_SESSION['panier']['qte_produit'],$qte_produit);
      array_push( $_SESSION['panier']['prix_jeu'],$prix_jeu);
   }
}
else
echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function supprimerArticle($jeu_id){
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['jeu_id'] = array();
      $tmp['qte_produit'] = array();
      $tmp['prix_jeu'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['jeu_id']); $i++)
      {
         if ($_SESSION['panier']['jeu_id'][$i] !== $jeu_id)
         {
            array_push( $tmp['jeu_id'],$_SESSION['panier']['jeu_id'][$i]);
            array_push( $tmp['qte_produit'],$_SESSION['panier']['qte_produit'][$i]);
            array_push( $tmp['prix_produit'],$_SESSION['panier']['prix_produit'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function MontantGlobal(){
    $total=0;
    for($i = 0; $i < count($_SESSION['panier']['jeu_id']); $i++)
    {
       $total += $_SESSION['panier']['qte_produit'][$i] * $_SESSION['panier']['prix_produit'][$i];
    }
    return $total;
 }

 function isVerrouille(){
    if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
    return true;
    else
    return false;
 }

 function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['jeu_id']);
   else
   return 0;

}

function supprimePanier(){
    unset($_SESSION['panier']);
 }

?>