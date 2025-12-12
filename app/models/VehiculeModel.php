<?php
namespace app\models;

use Flight;
use PDO;

class VehiculeModel {
 
    private $db;

    public function __construct($db) { 
        $this->db = $db;
    }
    
    public function getVehicules() {
        $stmt = $this->db->prepare("select * from vehicules");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>