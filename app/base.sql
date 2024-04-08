
DROP TABLE IF EXISTS Client cascade;
CREATE TABLE Client(
    id serial,
    name VARCHAR,
    Email VARCHAR,
    password VARCHAR,
    is_admin boolean
);


INSERT INTO Client(Email,password)values('mamisoa@gmail.com','root');
INSERT INTO Client(Email,password)values('anjara@gmail.com','root');
INSERT INTO Client(Email,password)values('erico@gmail.com','root');

DROP TABLE IF EXISTS Categorire cascade;
CREATE TABLE Categorire(
    idCategorire serial,
    Libelle VARCHAR(50)
);
INSERT INTO Categorire(Libelle)values('Vetement'),('Chaussure'),('Autre');


DROP TABLE IF EXISTS Article cascade;
CREATE TABLE Article(
    idArticle serial,
    Titre VARCHAR(25),
    Resume VARCHAR(50),
    idCategorire int,
    Contenu text
);

DROP TABLE IF EXISTS Produit cascade;
CREATE TABLE Produit(
    id serial,
    Nom VARCHAR(50),
    Marque VARCHAR(50)
);

INSERT INTO Produit(Nom,Marque)values('Jordan','Nike'),('Stan Smith','Adidas'),('Curry','UndeArmour');






