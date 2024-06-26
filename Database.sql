CREATE TABLE Nationalite(
    Id serial PRIMARY KEY,
    Designation VARCHAR,
    Drapeau VARCHAR
);
CREATE TABLE Ligue(
    Id serial PRIMARY KEY,
    Designation VARCHAR,
    IdNationalite int references Nationalite(id)
);
INSERT INTO Ligue(Designation, IdNationalite)
values('Premier Ligue', 3),
    ('LaLiga', 2),
    ('Ligue 1', 1),
    ('MLS', 4);
CREATE TABLE ClubTeam(
    Id serial PRIMARY KEY,
    Nom VARCHAR unique,
    Profil VARCHAR,
    Code VARCHAR(3),
    IdLigue int REFERENCES Ligue(id)
);
CREATE TABLE NationalTeam(
    Id serial PRIMARY KEY,
    Nom VARCHAR unique,
    Profil VARCHAR,
    Code VARCHAR(3),
    IdNationalite int REFERENCES Nationalite(id)
);
CREATE TABLE Joueur(
    id serial PRIMARY KEY,
    Nom VARCHAR,
    Prenom VARCHAR,
    Dtn date,
    Taille NUMERIC(3, 0),
    Profil VARCHAR,
    NbButs NUMERIC(5, 0),
    IdNationalite int,
    IdClubTeam int,
    IdNationalTeam int,
    FOREIGN KEY (IdNationalite) REFERENCES Nationalite(id),
    FOREIGN KEY (IdClubTeam) REFERENCES ClubTeam(id),
    FOREIGN KEY (IdNationalTeam) REFERENCES NationalTeam(id)
);
CREATE TABLE Parcours(
    id serial PRIMARY KEY,
    DateDebut Date,
    DateFin Date,
    IdClubTeam int,
    IdNationalTeam int,
    IdJoueur int,
    FOREIGN KEY (IdClubTeam) REFERENCES ClubTeam(id),
    FOREIGN KEY (IdNationalTeam) REFERENCES NationalTeam(id),
    FOREIGN KEY (IdJoueur) REFERENCES Joueur(id)
);
