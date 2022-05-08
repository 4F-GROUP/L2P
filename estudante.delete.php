<?php 
    require_once('config/config.php');

    $service = new EstudanteService();

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if($service->deletar($id))
    {
        header('location: ./home?success=true');
        exit;
    } else {
        header('location: ./home?error=true');
        exit;
    }

    
