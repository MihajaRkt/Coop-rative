<?php
namespace app\models;

use Flight;
use PDO;

class TrajetModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insererTrajet($data)
    {
        $sql = "INSERT INTO coop_trajet
                (idchauffeur, idvehicule, d_debut, h_debut, d_fin, h_fin, recette, carburant)
                VALUES
                (:chauffeur, :vehicule, :d_debut, :h_debut, :d_fin, :h_fin, :recette, :carburant)";

        $sql = "insert into coop_trajet
        (idchauffeur, idvehicule, debut, fin, recetteMt, carburantMt) 
        values
        (:chauffeur, :vehicule, TIMESTAMP(:d_debut, :h_debut), TIMESTAMP(:d_fin, :h_fin), :recette, :carburant)";
        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            ':chauffeur' => $data['chauffeur'],
            ':vehicule' => $data['vehicule'],
            ':d_debut' => $data['d_debut'],
            ':h_debut' => $data['h_debut'],
            ':d_fin' => $data['d_fin'],
            ':h_fin' => $data['h_fin'],
            ':recette' => $data['recette'],
            ':carburant' => $data['carburant']
        ]);
    }
}

