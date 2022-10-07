<!DOCTYPE HMTL>

<html lang ="fr">
    <head>
        <meta charset = "utf-8">
        <meta name="accueil.php" content="accueil.php">
        <meta name="description" content="Accueil">
		<meta name="viewport" content="width=500, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" href="accueil.css" />
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

            <div class = "conteneur">
                <h2> Bienvenue sur Rétrogame. Achetez et vendez vos produits en temps réél ! </h2>

                <h3> Les produits </h3>
                
                <section id = "formulaire">
                <section class="carousel">
                    <ul class="carousel-items">
                        <li class="carousel-item">
                            <div class="card">
                                <img class="jeu" src="images/mario64.png" alt = "mario64" />
                                <div class="card-content">
                                <p class ="titre"> Super Mario 64</p>
                                <p class ="description"> Nintendo 64</p>
                                <p class ="description"> 14,99 € </p>
                                <p class ="description"> Ajouté le 26/09/2022 </p>
                                <p class ="description"> Ajouté par Benjamin Durand </p>
                                <form method="post" action="panier.php">
                                <button type = "submit" name="panier" class="panier"> Panier </button>
                                </form>
                                </div>
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img class="jeu" src="images/ff7.jpg" alt = "ff7" />
                                <div class="card-content">
                                <p class ="titre"> Final Fantasy 7</p>
                                <p class ="description"> PS1</p>
                                <p class ="description"> 39,99 € </p>
                                <p class ="description"> Ajouté le 25/09/2022 </p>
                                <p class ="description"> Ajouté par Doug Bowser </p>
                                <form method="post" action="panier.php">
                                <button type = "submit" name="panier" class="panier"> Panier </button>
                                </form>
                                </div>
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img class="jeu" src="images/castlevania.png" alt = "castlevania" />
                                <div class="card-content">
                                <p class ="titre"> Castlevania</p>
                                <p class ="description"> NES</p>
                                <p class ="description"> 49,99 € </p>
                                <p class ="description"> Ajouté le 25/09/2022 </p>
                                <p class ="description"> Ajouté par Thierry Dufresne </p>
                                <form method="post" action="panier.php">
                                <button type = "submit" name="panier" class="panier"> Panier </button>
                                </form>
                                </div>
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img class="jeu" src="images/Sonic.png" alt = "sonic" />
                                <div class="card-content">
                                <p class ="titre"> Sonic I</p>
                                <p class ="description"> Megadrive </p>
                                <p class ="description"> 4,99 € </p>
                                <p class ="description"> Ajouté le 24/09/2022 </p>
                                <p class ="description"> Ajouté par Héloise Chemin </p>
                                <form method="post" action="panier.php">
                                <button type = "submit" name="panier" class="panier"> Panier </button>
                                </form>
                                </div>
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img class="jeu" src="images/Luigi mansion.png" alt = "Luigi's Mansion" />
                                <div class="card-content">
                                <p class ="titre"> Luigi's Mansion</p>
                                <p class ="description"> Nintendo Gamecube</p>
                                <p class ="description"> 29,99 € </p>
                                <p class ="description"> Ajouté le 24/09/2022 </p>
                                <p class ="description"> Ajouté par Katherine Fréget </p>
                                <form method="post" action="panier.php">
                                <button type = "submit" name="panier" class="panier"> Panier </button>
                                </form>
                                </div>
                            </div>
                        </li>

                    </ul>
                </section>
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