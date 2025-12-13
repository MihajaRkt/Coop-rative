<?php
namespace app\controllers;

use app\models\VehiculeModel;
use app\controllers\ChauffeurController;
use Flight;

class VehiculeController {
    // public function getVehicules() {
    //     $vehicule=new VehiculeModel(Flight::db());
    //     $vs = $vehicule->getVehicules();
    //     Flight::render('index', ['listeVehicule' => $vs]);
    // }

    public function getVehicules() {
        $vehicule=new VehiculeModel(Flight::db());
        $vs = $vehicule->getVehicules();

        $chauffeur=new ChauffeurController();
        $cs = $chauffeur->getChauffeurs();
       Flight::render('index', ['listeVehicule' => $vs,'listeChauffeur' => $cs]);
    }
}