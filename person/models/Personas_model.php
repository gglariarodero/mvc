<?php

require_once 'config/database.php';
require_once 'config/config.php';

class Personas_model {
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;

    }

    public function get_all_personas(){
        
    $query = "SELECT name, birthdate FROM person ORDER BY id DESC";

    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}