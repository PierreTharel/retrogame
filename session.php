<?php
   session_start();
   @$nom=$_SESSION["nom"];
   @$prenom=$_SESSION["prenom"];
 if($_SESSION["autoriser"]!="oui"){
      header("location:compte.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bonjour et bienvenue ".$_SESSION["prenom"]. ' '.$_SESSION["nom"]." dans votre espace personnel";
   else
      $bienvenue="Bonsoir et bienvenue ".$_SESSION["prenom"]. ' '.$_SESSION["nom"]." dans votre espace personnel";
?>

<!DOCTYPE HMTL>

<html lang ="fr">
    <head>
        <meta charset = "utf-8">
        <meta name="session.php" content="session.php">
        <meta name="description" conte="cachent=Session">
		<meta name="viewport" content="width=500, initial-scale=1">
        <meta http-equiv-control content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" href="session.css" />
        <link rel="icon" type="image/png" href="images/pacman.png" />
        <title>Session</title>
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
        <h2><?php echo $bienvenue?></h2>
        <button> <a class = "button" href="deconnexion.php">Se déconnecter </a> </button>

        <footer> 
            <a href = "#general.php" class="footer"> Qui sommes nous ? </a>
            <a href = "#help.php" class="footer"> Besoin d'aide ? </a>
            <a href = "#vente.php" class="footer"> CGV </a>
            <a href = "#magasin.php" class="footer"> Nos magasins </a>
            <a href = "#utilisateur.php" class="footer"> CGU </a>
            <a href = "#metions.php" class="footer"> Mentions Légales </a>
            <a href = "#actu.php" class="footer"> L'actu JV</a>
        </footer>
    </body>
</html> 