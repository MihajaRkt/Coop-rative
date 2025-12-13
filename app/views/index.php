<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Coopérative - Accueil </title>
</head>

<body>

    <h1> Coopératives </h1>

    <h2> Entrez les informations nécessaires </h2>

    <form action="/insertion" method="post">
        <p>Chauffeur
            <select name="chauffeur">
                <?php foreach ($listeChauffeur as $l) { ?>
                    <option value="<?= $l['idchauffeur'] ?>"><?= $l['nom'] ?></option>
                <?php } ?>
            </select>
        </p>
        <p>Vehicule
            <select name="vehicule">
                <?php foreach ($listeVehicule as $l) { ?>
                    <option value="<?= $l['idvehicule'] ?>"><?= $l['nom'] ?></option>
                <?php } ?>
            </select>
        </p>
        <p> (Début) Date : <input type="date" name="d_debut"> Heure : <input type="time" name="h_debut"> </p>
        <p> (Fin) Date : <input type="date" name="d_fin"> Heure : <input type="time" name="h_fin"> </p>
        <p> Recette : <input type="number" name="recette"> </p>
        <p> Carburant : <input type="number" name="carburant"> </p>
    
        <p> <input type="submit" value="Valider"> </p>
    </form>

    <a href="#"> Liste des coopératives</a>

</body>

</html>