-- Active: 1685438954099@@127.0.0.1@3306
CREATE DATABASE projeteugenie

    DEFAULT CHARACTER SET = 'utf8mb4';

    use projeteugenie;

DROP TABLE IF EXISTS categorie;  
DROP TABLE IF EXISTS article;  
DROP TABLE IF EXISTS commentaire;  

CREATE TABLE categorie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(128),
    title VARCHAR(128),
);

CREATE TABLE article (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(128) NOT NULL,
    description VARCHAR(128) NOT NULL,
    user VARCHAR(128) NOT NULL,
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie(categorie),
);

CREATE TABLE commentaire (
    id INT PRIMARY KEY AUTO_INCREMENT,
    commentaire VARCHAR(128) NOT NULL,
    title VARCHAR(128),
    id_article INT,
    FOREIGN KEY (id_article) REFERENCES article(article),
);

INSERT INTO article (user, title, description)
VALUES ('Shineii','Comment jouer Steamer DoPou','Passer niveau 200 et être riche'),
('Nekost','Comment jouer Xelor multi', 'Connaitre les deplacements du Xelor');

INSERT INTO commentaire (title, commentaire)
VALUES ("Pas ouf l'article",''),
("Article très interessant",'');

INSERT INTO categorie (title)
VALUES ('Horreur'),
('Psychologique');