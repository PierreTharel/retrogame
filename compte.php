<?php
   session_start();
   @$email=$_POST["email"];
   @$mot_de_passe=$_POST["mot_de_passe"];
   @$valider=$_POST["envoi"];
   $erreur="";
   if(isset($valider)){
    include("connexion.php");
    $sel=$db->prepare('SELECT * FROM client WHERE email=? AND mot_de_passe=? LIMIT 1');
    $sel->execute(array($email,$mot_de_passe));
    $tab=$sel->fetchAll();
    if(count($tab)>0){
       $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
       " ".strtoupper($tab[0]["nom"]);
       $_SESSION["autoriser"]="oui";
       header("location:session.php");
    }
    else
       $erreur="Mauvais email ou mot de passe!";
 }
?>
<!DOCTYPE HMTL>

<html lang ="fr">
    <head>
        <meta charset = "utf-8">
        <meta name="compte.php" content="compte.php">
        <meta name="description" content="Compte">
		<meta name="viewport" content="width=500, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" href="compte.css" />
        <link rel="icon" type="image/png" href="images/pacman.png" />
        <title>Compte</title> 
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

            <div class = "conteneur">
                <h2> Vous avez un compte client ? Saisiez vos informations ici ! </h2>

                <section id = "formulaire">
                <form method="post" action="compte.php">
                <table>
                    <tr>
                    <td class = "champ"> Email </td> 
                    <td><input type = "email" name="email" \></td>
                    </tr>
                    <tr>
                    <td class = "champ"> Mot de passe </td> 
                    <td><input type = "password" name="mot_de_passe" \></td>
                    </tr>
                </table>
                <button type = "submit" name="envoi"> S'identifier </button>
                </form>

                </section>

                <section id = "nouveaucompte">
                <form method="post" action="nouveaucompte.php">
                <p class = "nouveaucompte"> Nouveau compte ? </p> <input type = "submit" name="envoi" value="Créér un compte" class="input"> </button>
                </form>
                </section>
            </div>
        </section>

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