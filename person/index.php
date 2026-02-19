<?php 
    require_once 'config/database.php';
    require_once 'config/config.php';
    require_once 'controllers/Personas_controller.php';

    $request = $_SERVER['REQUEST_URI'];

    $personaController = new Personas_Controller($pdo);
    $personaController->view();
    
    
    