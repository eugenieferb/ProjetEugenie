git-- Active: 1685438954099@@127.0.0.1@3306
CREATE DATABASE projeteugenie
    DEFAULT CHARACTER SET = 'utf8mb4';

use projeteugenie;

DROP TABLE IF EXISTS categorie;  
DROP TABLE IF EXISTS article;  
DROP TABLE IF EXISTS commentaire;  

CREATE TABLE categorie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(128) NOT NULL
);

CREATE TABLE article (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(128) NOT NULL,
    description VARCHAR(128) NOT NULL,
    user VARCHAR(128) NOT NULL,
    img VARCHAR(128) NOT NULL,
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie(id)
);

CREATE TABLE commentaire (
    id INT PRIMARY KEY AUTO_INCREMENT,
    surfacecom VARCHAR(128) NOT NULL,
    id_article INT,
    FOREIGN KEY (id_article) REFERENCES article(id)
);

INSERT INTO article (user, title, description, img)
VALUES ('Shineii','Ilyzaelle','Passer niveau 200 et être riche',''),
('Nekost','Comment jouer Xelor multi', 'Connaitre les deplacements du Xelor','');

INSERT INTO commentaire (surfacecom)
VALUES ("Pas ouf l'article"),
("Article très interessant");

INSERT INTO categorie (label)
VALUES ('Horreur'),
('Psychologique');