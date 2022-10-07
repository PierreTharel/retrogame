<?php

   session_start();
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$email=$_POST["email"];
   @$mot_de_passe=$_POST["mot_de_passe"];
   @$adresse=$_POST["adresse"];
   @$code_postal=$_POST["code_postal"];
   @$ville=$_POST["ville"];
   @$telephone=$_POST["telephone"];
   @$valider=$_POST["envoi"];
    $erreur="";
    if(isset($valider)){
        if(empty($nom)) $erreur="Le champ Nom est vide, veuillez la remplir s'il vous plaît !";
        elseif(empty($prenom)) $erreur="Le champ Prenom est vide, veuillez la remplir s'il vous plaît !";
        elseif(empty($email)) $erreur="Le champ Email est vide, veuillez la remplir s'il vous plaît !";
        elseif(empty($mot_de_passe)) $erreur="Le champ Mot de Passe est vide, veuillez la remplir s'il vous plaît !";
        elseif(empty($adresse)) $erreur="Le champ Adresse est vide, veuillez la remplir s'il vous plaît !";
        elseif(empty($code_postal)) $erreur="Le champ Code Postal est vide, veuillez la remplir s'il vous plaît !";
        elseif(empty($ville)) $erreur="Le champ Ville est vide, veuillez la remplir s'il vous plaît !";
        elseif(empty($telephone)) $erreur="Le champ Telephone est vide, veuillez la remplir s'il vous plaît !";
        else{
            include("connexion.php");
            $sel=$db->prepare('SELECT * FROM client WHERE email=? LIMIT 1');
            $sel->execute(array($email));
            $tab=$sel->fetchAll();
            if(count($tab)>0)
               $erreur="Email existe déjà!";
            else{
                $ins = $db->prepare('INSERT INTO client(nom,prenom,email,mot_de_passe,adresse,code_postal,ville,telephone) VALUES(?,?,?,?,?,?,?,?)');
                if ($ins->execute(array($nom, $prenom, $email, $mot_de_passe, $adresse, $code_postal, $ville, $telephone)))
                header("location:compte.php");
            }   
        }
    }
 

?>

<!DOCTYPE HMTL>

<html lang ="fr">
    <head>
        <meta charset = "utf-8">
        <meta name="nouveaucompte.php" content="nouveaucompte.php">
        <meta name="description" content="Nouveau Compte">
		<meta name="viewport" content="width=500, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" href="nouveaucompte.css" />
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
                <h2> Créér votre compte en seulement un clic !</h2>

                <section id = "formulaire">
                <form method="post" action="nouveaucompte.php">
                <table>
                    <tr>
                    <td class = "champ"> Nom </td>
                    <td><input type = "text" name="nom" \></td>
                    </tr>
                    <tr>
                    <td class = "champ"> Prenom </td> 
                    <td><input type = "text" name="prenom"\></td>
                    </tr>
                    <tr>
                    <td class = "champ"> Email </td> 
                    <td><input type = "email" name="email"\></td>
                    </tr>
                    <tr>
                    <td class = "champ"> Mot de passe </td> 
                    <td><input type = "password" name="mot_de_passe" \></td>
                    </tr>
                    <td class = "champ"> Adresse </td> 
                    <td><input type = "text" name="adresse" \></td>
                    </tr>
                    <tr>
                    <td class = "champ"> Code Postal </td> 
                    <td><input type = "number" name="code_postal"></td>
                    </tr>
                    <td class = "champ"> Ville </td> 
                    <td><input type = "text" name="ville"></td>
                    </tr>
                    <tr>
                    <td class = "champ"> Téléphone </td> 
                    <td><input type = "tel" name="telephone"> </td>
                    </tr>
                </table>
                <button type = "submit" name="envoi"> Créer un compte </button>
                </form> 

                </section>

                <section id = "compteclient">
                <form method="post" action="compte.php">
                <p class = "compteclient"> Vous avez déjà un compte ? </p> <input type = "submit" name="envoi" value="Connectez vous" class="input"> </button>
                </form>
                </section>
        </div>

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