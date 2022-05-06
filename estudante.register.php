<?php 
    require_once('config/config.php');

    $service = new EstudanteService();

    $cpf = filter_input(INPUT_POST, 'inputCPF', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'inputTelefone', FILTER_SANITIZE_NUMBER_INT);
    $nascimento = filter_input(INPUT_POST, 'inputNascimento', FILTER_SANITIZE_NUMBER_INT);
    $endereco = filter_input(INPUT_POST, 'inputEndereco', FILTER_SANITIZE_SPECIAL_CHARS);
    $bairro = filter_input(INPUT_POST, 'inputBairro', FILTER_SANITIZE_SPECIAL_CHARS);
    $escolaridade = filter_input(INPUT_POST, 'inputEscolaridade', FILTER_SANITIZE_NUMBER_INT);
    $instituicao = filter_input(INPUT_POST, 'inputInstituicao', FILTER_SANITIZE_NUMBER_INT);
    $instituicaonome = filter_input(INPUT_POST, 'inputInstituicaoNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $curso = filter_input(INPUT_POST, 'inputCurso', FILTER_SANITIZE_SPECIAL_CHARS);
    $motivo = filter_input(INPUT_POST, 'inputMotivo', FILTER_SANITIZE_SPECIAL_CHARS);
    $escolha = filter_input(INPUT_POST, 'inputEscolha', FILTER_SANITIZE_SPECIAL_CHARS);
    $experiencia = filter_input(INPUT_POST, 'inputExperiencia', FILTER_SANITIZE_SPECIAL_CHARS);
    $expectativa = filter_input(INPUT_POST, 'inputExpectativa', FILTER_SANITIZE_SPECIAL_CHARS);

    $estudante = new Estudante();
    $estudante->setCPF($cpf);
    $estudante->setNome($nome);
    $estudante->setEmail($email);
    $estudante->setTelefone($telefone);
    $estudante->setNascimento($nascimento);
    $estudante->setEndereco($endereco);
    $estudante->setBairro($bairro);
    $estudante->setEscolaridade($escolaridade);
    $estudante->setInstituicao($instituicao);
    $estudante->setInstituicaoNome($instituicaonome);
    $estudante->setCurso($curso);
    $estudante->setMotivo($motivo);
    $estudante->setEscolha($escolha);
    $estudante->setExperiencia($experiencia);
    $estudante->setExpectativa($expectativa);

    if($service->cadastrar($estudante))
    {
        header('location: ./home?success=true');
        exit;
    } else {
        header('location: ./home?error=true');
        exit;
    }

    
