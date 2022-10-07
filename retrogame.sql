CREATE DATABASE retrogame;

CREATE TABLE adm
(
id INT PRIMARY KEY NOT NULL,
nom VARCHAR(100) NOT NULL,
prenom VARCHAR(100) NOT NULL,
mot_de_passe VARCHAR(255) NOT NULL,
date_inscription VARCHAR(255) NOT NULL
);

CREATE TABLE magasin(
id INT PRIMARY KEY NOT NULL,
adm_id INT NOT NULL,
ville VARCHAR(100) NOT NULL,
rayon VARCHAR(100) NOT NULL
);

CREATE TABLE recu(
id INT PRIMARY KEY NOT NULL,
magasin_id INT NOT NULL,
commande_id INT NOT NULL,
jeu_id INT NOT NULL,
recu_date DATETIME,
recu_heure DATETIME
);

CREATE TABLE jeu(
id INT PRIMARY KEY NOT NULL,
nom_cons VARCHAR(100) NOT NULL,
nom_jeu VARCHAR(100) NOT NULL,
genre_jeu VARCHAR(100) NOT NULL,
date_ajout DATETIME,
annee_jeu DATETIME,
mode_jeu VARCHAR(100) NOT NULL,
prix_jeu DECIMAL(10,0) NOT NULL
);

CREATE TABLE vendeur
(
id INT PRIMARY KEY NOT NULL,
jeu_id INT NOT NULL,
nom VARCHAR(100) NOT NULL,
prenom VARCHAR(100) NOT NULL,
mot_de_passe VARCHAR(255) NOT NULL,
date_inscription VARCHAR(255) NOT NULL
);

CREATE TABLE client
(
id INT PRIMARY KEY NOT NULL,
nom VARCHAR(100) NOT NULL,
prenom VARCHAR(100) NOT NULL,
mot_de_passe VARCHAR(255) NOT NULL,
date_inscription DATETIME NOT NULL,
adresse VARCHAR(255) NOT NULL,
code_postal INT(5) NOT NULL,
ville VARCHAR(100) NOT NULL,
telephone VARCHAR(100) NOT NULL,
);

CREATE TABLE commande
(
id INT PRIMARY KEY NOT NULL,
client_id INT NOT NULL,
num_com INT NOT NULL,
total INT NOT NULL,
statut BOOLEAN,
date_achat DATETIME
);

CREATE TABLE prix
(
id INT PRIMARY KEY NOT NULL,
recu_id INT NOT NULL,
type_reduc VARCHAR(255) NOT NULL,
prix_total INT NOT NULL
);

CREATE TABLE panier
(
id INT PRIMARY KEY NOT NULL,
nom_jeu VARCHAR (100) NOT NULL,
prix_jeu DECIMAL (10,0) NOT NULL,
type_reduc VARCHAR (100) NOT NULL,
prix_total DECIMAL (10,0) NOT NULL,
);

INSERT INTO jeu (id,nom_cons,nom_jeu,genre_jeu,date_ajout,annee_jeu,mode_jeu,prix_jeu)
VALUES
(1,'Nintendo 64','Super Mario 64','Plates-Formes','2022-09-26',1996,'Solo',14.99),
(2,'PS1','Final Fantasy 7', 'Aventure', '2022-09-25',1997,'Solo',39.99),
(3,'NES','Castlevania', 'Action', '2022-09-25,1986','Solo',49.99),
(4,'Megadrive','Sonic I', 'Plate-Formes', '2022-09-24',1991,'Solo',4.99),
(5,'Nintendo Gamecube','Luigi s Mansion', 'Horreur', '2022-09-24',2001,'Solo',29.99);


ALTER TABLE magasin
ADD FOREIGN KEY (adm_id) REFERENCES adm(id);

ALTER TABLE recu
ADD FOREIGN KEY (magasin_id) REFERENCES magasin(id);

ALTER TABLE recu
ADD FOREIGN KEY (commande_id) REFERENCES commande(id);

ALTER TABLE recu
ADD FOREIGN KEY (jeu_id) REFERENCES jeu(id);

ALTER TABLE vendeur
ADD FOREIGN KEY (jeu_id) REFERENCES jeu(id);

ALTER TABLE prix
ADD FOREIGN KEY (recu_id) REFERENCES recu(id);

ALTER TABLE commande
ADD FOREIGN KEY (client_id) REFERENCES client(id);

ALTER TABLE panier
ADD FOREIGN KEY (jeu_id) REFERENCES jeu(id);


