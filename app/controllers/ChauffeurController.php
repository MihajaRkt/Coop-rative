<?php
namespace app\controllers;

use app\models\ChauffeurModel;
use Flight;

class ChauffeurController {
    public function getChauffeurs() {
        $Chauffeur=new ChauffeurModel(Flight::db());
        $vs = $Chauffeur->getChauffeurs();
        Flight::render('index', ['listeChauffeur' => $vs]);
    }
}