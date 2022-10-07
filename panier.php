<?php
session_start();
include_once("fonctions-panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récupération des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On vérifie que $p est un float
   $p = floatval($p);

   //On traite $q qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['jeu_id'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}

?>

<!DOCTYPE HMTL>

<html lang ="fr">
    <head>
        <meta charset = "utf-8">
        <meta name="panier.php" content="panier.php">
        <meta name="description" content="Panier">
		<meta name="viewport" content="width=500, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" href="panier.css" />
        <link rel="icon" type="image/png" href="images/pacman.png" />
        <title>Retrogame</title> 
	</head>

    <body>
        <section id="header">

            <div class = "conteneur">
                <header>
                <img id="logo" src="images/RetroGame.png" alt="logo">
                <img id="bouton1" src="images/accueil.png" alt="accueil"> 
                <img id="bouton2" src="images/compte.png" alt="compte">
                <img id= "bouton3" src="images/euro.png" alt="euro">
                <img id="bouton4" src="images/recherche.jpg" alt="recherche">
                <a href="accueil.php" class = "accueil"> Accueil </a>
                <a href="compte.php" class = "compte"> Compte </a>
                <a href="vente.php" class = "vente" >  Vente </a>
                <a href="recherche.php" class = "recherche" >  Recherche </a>

                </header>
            </div>
        </section>
        <section id="brands">
    
    
    <form method="post" action="panier.php">

    <table>
    <tr>
        <td> Votre panier : </td> <br> <br>
    </tr>
    <tr>
        <td>Libellé</td>
        <td>Nom du jeu</td>
        <td>Prix du jeu</td>
        <td>Réduction</td>
        <td>Quantité</td>
        <td>Prix Total</td>
    </tr>
</table>
    
    <br>

    <?php
    if (creationPanier())
    {
        $nbArticles=count($_SESSION['panier']['jeu_id']);
        if ($nbArticles <= 0)
        echo "<tr><td>Votre panier est vide </ td></tr>";
        else
        {
            for ($i=0 ;$i < $nbArticles ; $i++)
            {
                echo "<tr>";
                echo "<td>".htmlspecialchars($_SESSION['panier']['jeu_id'][$i])."</ td>";
                echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
                echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['jeu_id'][$i]))."\">XX</a></td>";
                echo "</tr>";
            }

            echo "<tr><td colspan=\"2\"> </td>";
            echo "<td colspan=\"2\">";
            echo "Total : ".MontantGlobal();
            echo "</td></tr>";

            echo "<tr><td colspan=\"4\">";
            echo "<input type=\"submit\" value=\"Rafraichir\"/>";
            echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

            echo "</td></tr>";
        }
    }
    ?>
</table>
</form>
</body>
</html>


