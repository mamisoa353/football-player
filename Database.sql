CREATE TABLE Nationalite(
    Id serial PRIMARY KEY,
    Designation VARCHAR,
    Drapeau VARCHAR
);
CREATE TABLE Ligue(
    Id serial PRIMARY KEY,
    Designation VARCHAR,
    IdNationalite int
);
INSERT INTO Ligue(Designation, IdNationalite)
values('Premier Ligue', 3),
    ('LaLiga', 4),
    ('Ligue 1', 2),
    ('MLS', 5);
CREATE TABLE ClubTeam(
    Id serial PRIMARY KEY,
    Nom VARCHAR unique,
    Profil VARCHAR,
    Code VARCHAR(3),
    IdLigue int
);
