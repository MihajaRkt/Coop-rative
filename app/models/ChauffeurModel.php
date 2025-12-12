<?php
namespace app\models;

use Flight;
use PDO;

class ChauffeurModel {
 
    private $db;

    public function __construct($db) { 
        $this->db = $db;
    }
    
    public function getChauffeurs() {
        $stmt = $this->db->prepare("select * from chauffeurs");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>