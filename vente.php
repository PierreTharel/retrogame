<!DOCTYPE HMTL>

<html lang ="fr">
    <head>
        <meta charset = "utf-8">
        <meta name="vente.php" content="vente.php">
        <meta name="description" content="Vente">
		<meta name="viewport" content="width=500, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" href="vente.css" />
        <link rel="icon" type="image/png" href="images/pacman.png" />
        <title>Vente</title> 
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
                <h2> Vous voulez vendre votre jeu ? Saisiez les informations ici ! </h2>
                <section id = "formulaire">
                <form method="post" action="accueil.php">
                <table>
                    <tr>
                    <td class = "champ"> Nom du jeu </td> 
                    <td><input type = "name" name="nom" \></td>
                    </tr>
                </table>

                <table>
                <form class="image" method="post" action="accueil.php" enctype = "multipart/form-data">
                    <p>
                    <input type = "file" name = "image" />
                    <div class = "style" />
                    </p>
                    </form>
                </table>
                
                <div class="select">
                <h3> Console </h3>
                <select>
                <option>Console</option>
                <option value="NES">NES</option>
                <option value="Master System">Master System</option>
                <option value="Super Nintendo">Super Nintendo</option>
                <option value="Megadrive">Megadrive</option>
                <option value="Nintendo 64">Nintendo 64</option>
                <option value="PS1">PS1</option>
                <option value="Saturn">Saturn</option>
                <option value="PC">PC</option>
                <option value="Xbox">Xbox</option>
                <option value="Nintendo Gamecube">Nintendo GameCube</option>
                <option value="PS2">PS2</option>
                <option value="Dreamcast">DreamCast</option>
                <option value="PS3">PS3</option>
                <option value="Xbox 360">Xbox 360</option>
                <option value="Nintendo Wii">Nintendo Wii</option>
                <option value="GBClassic">Game Boy Classic</option>
                <option value="GBColor">Game Boy Color</option>
                <option value="GBAdvence">Game Boy Advence</option>
                <option value="DS">Nintendo DS</option>
                <option value="Game Gear">Game Gear</option>
                <option value="PSP">PSP</option>
                </select>
                </div>

                <div class="select">
                <h3> Licence </h3>
                <select>
                <option>Licence</option>
                <option value="Mario">Super Mario</option>
                <option value="Zelda">The Legend of Zelda</option>
                <option value="Kirby">Kirby</option>
                <option value="GoW">God of War</option>
                <option value="Resident Evil">Resident Evil</option>
                <option value="Silent Hill">Silent Hill</option>
                <option value="Sonic">Sonic</option>
                <option value="Monster Hunter">Monster Hunter</option>
                <option value="Pokémon">Pokémon</option>
                <option value="Gran Turismo">Gran Turismo</option>
                <option value="Final Fantasy">Final Fantasy</option>
                <option value="Castlevania">Castlevania</option>
                <option value="Tomb Raider">Tomb Raider</option>
                <option value="Crash Bandicoot">Crash Bandicoot</option>
                <option value="Super Smash Bros">Super Smash Bros.</option>
                <option value="Autre">Autre</option>
                </select>
                </div>

                <div class="select">
                <h3> Année </h3>
                <select>
                <option>Année de sortie</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                </select>
                </div>
                <br>


                <div class="select2">
                <h3> Genre </h3>
                <select>
                <option>Genre</option>
                <option value="Action">Action</option>
                <option value="Aventure">Aventure</option>
                <option value="Plateforme">Plateforme</option>
                <option value="Horreur">Horreur</option>
                <option value="Simulation">Simulation</option>
                <option value="Gestion">Gestion</option>
                <option value="Sport">Sport</option>
                <option value="Course">Course</option>
                <option value="RPG">RPG</option>
                <option value="Musical">Musical</option>
                <option value="Arcade">Arcade</option>
                <option value="Réflexion">Réflexion</option>
                </select>
                </div>


                <div class="select2">
                <h3> Prix </h3>
                <select>
                <option>Fourchette prix</option>
                <option value="<5E">Moins de 5 €</option>
                <option value="E510E">Entre 5 et 10 €</option>
                <option value="E1015E">Entre 10 et 15 €</option>
                <option value="E1520E">Entre 15 et 20 €</option>
                <option value="E2025E">Entre 20 et 25 €</option>
                <option value="E2530E">Entre 25 et 30 €</option>
                <option value="E3035E">Entre 30 et 35 €</option>
                <option value="E3540E">Entre 35 et 40 €</option>
                <option value="E4045E">Entre 40 et 45 €</option>
                <option value="E4550E">Entre 45 et 50 €</option>
                <option value=">50E">Plus de 50 €</option>
                </select>
                </div>

                <div class="select2">
                <h3> Mode </h3>
                <select>
                <option>Mode de jeu</option>
                <option value="1">Solo</option>
                <option value="2">Coopératif (deux joueurs)</option>
                <option value="3">Multijoueur</option>
                <option value="4">Jeu en équipe</option>
                <option value="4">MMORPG</option>
                </select>
                </div>

                <button type = "submit" name="envoi"> Vendre </button>
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

        