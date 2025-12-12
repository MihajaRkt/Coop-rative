<?php
namespace app\controllers;

use app\models\VehiculeModel;
use Flight;

class VehiculeController {
    public function getVehicules() {
        $vehicule=new VehiculeModel(Flight::db());
        $vs = $vehicule->getVehicules();
        Flight::render('index', ['listeVehicule' => $vs]);
    }
}