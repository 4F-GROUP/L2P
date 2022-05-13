<?php 
    spl_autoload_register(function($file_name){
        
        $files = array(
            "php" . DIRECTORY_SEPARATOR . "model" . DIRECTORY_SEPARATOR . "{$file_name}.php",
            "php" . DIRECTORY_SEPARATOR . "repository" . DIRECTORY_SEPARATOR . "{$file_name}.php",
            "php" . DIRECTORY_SEPARATOR . "service" . DIRECTORY_SEPARATOR . "{$file_name}.php",
        );

        foreach ($files as $fileName) {
            if(file_exists($fileName)) {
                require_once($fileName);
            }
        }
    });
    
    session_start();

    $service = new UsuarioService();

    $matricula = filter_input(INPUT_POST, 'inputMatricula', FILTER_SANITIZE_NUMBER_INT);
    $senha = filter_input(INPUT_POST, 'inputSenha', FILTER_SANITIZE_SPECIAL_CHARS);

    $usuario = new Usuario();
    $usuario->setMatricula($matricula);
    $usuario->setSenha($senha);

    if($user = $service->login($usuario))
    {
        $_SESSION['usuario'] = $user->getNome();
        header('location: ./home');
        exit;
    } else {
        $_SESSION['error'] = 'Verifique login/senha';
        header('location: ./home');
        exit;
    }

    
