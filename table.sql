create DATABASE cooperative;
use cooperative;

CREATE table coop_chauffeurs(
    idchauffeur int auto_increment PRIMARY key,
    nom VARCHAR(50)
);
CREATE table coop_vehicules(
    idvehicule int auto_increment PRIMARY key,
    nom VARCHAR(50)
);

CREATE table coop_trajet(
    idtrajet int auto_increment PRIMARY key,
    idvehicule int,
    idchauffeur int,
    debut datetime,
    fin datetime,
    distance double,
    recetteMt DOUBLE,
    typee VARCHAR(1),
    carburantMt double,
    FOREIGN KEY(idvehicule) REFERENCES coop_vehicules(idvehicule),
    FOREIGN KEY(idchauffeur) REFERENCES coop_chauffeurs(idchauffeur)
);