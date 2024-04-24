create table user(
	id int auto_increment primary key,
	nom varchar(50),
	prenom varchar(50),
	pseudo varchar(50),
	passwd varchar(100)	
);
INSERT INTO `rojo-exam`.`user`
(id, nom, prenom, pseudo, passwd)
VALUES(1, 'RAKOTOMALALA', 'Andry Ny Aina Fehizoro', 'boodah', 'mdp');
INSERT INTO `rojo-exam`.`user`
(id, nom, prenom, pseudo, passwd)
VALUES(2, 'RAKOTONDRAZAFY', 'Ny Tendry Ferid', 'tendry', 'mdp');