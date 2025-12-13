<?php
namespace app\controllers;

use app\models\TrajetModel;
use Flight;

class TrajetController {

    public function getDataTrajet() {
        $data = [
            'chauffeur'  => Flight::request()->data->chauffeur,
            'vehicule'   => Flight::request()->data->vehicule,
            'd_debut'    => Flight::request()->data->d_debut,
            'h_debut'    => Flight::request()->data->h_debut,
            'd_fin'      => Flight::request()->data->d_fin,
            'h_fin'      => Flight::request()->data->h_fin,
            'recette'    => Flight::request()->data->recette,
            'carburant'  => Flight::request()->data->carburant
        ];
        $trajet = new TrajetModel(Flight::db());
        $trajet->insererTrajet($data);
        Flight::redirect("/");
    }
}