create DATABASE cooperative;
use cooperative;

CREATE table chauffeurs(
    idchauffeur int auto_increment PRIMARY key,
    nom VARCHAR(50)
);
CREATE table vehicules(
    idvehicule int auto_increment PRIMARY key,
    nom VARCHAR(50)
);

CREATE table trajet(
    idtrajet int auto_increment PRIMARY key,
    idvehicule int,
    idchauffeur int,
    debut datetime,
    fin datetime,
    distance double,
    recetteMt DOUBLE,
    typee VARCHAR(1),
    carburantMt double,
    FOREIGN KEY(idvehicule) REFERENCES vehicules(idvehicule),
    FOREIGN KEY(idchauffeur) REFERENCES chauffeurs(idchauffeur)
);