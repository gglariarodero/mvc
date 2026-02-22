<?php

class Personas_controller {

    private $personaModel;

    public function __construct($pdo) {

        require_once  "models/Personas_model.php";
        require_once 'config/config.php';
        $this->personaModel = new Personas_model($pdo);

    }

    public function view(){

    $datos_personas = $this->personaModel->get_all_personas();

    $datos_finales = array();
    $fecha_actual = date("Y-m-d");

        foreach ($datos_personas as $personas) {
               
            $diferencia = abs(strtotime($fecha_actual) - strtotime($personas['birthdate']));
            
            $edad = floor($diferencia / (365*60*60*24));
    
            $personas['edad'] = $edad ;
            $datos_finales [] = $personas;
        }

    require 'views/listado.php';

    }

}
