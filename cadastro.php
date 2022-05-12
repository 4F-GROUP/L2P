<?php 
  require_once('config/config.php');

if (isset($_FILES['Upload'])) {
    $dir = "./resources/fotos/"; # caminho onde será salvo o arquivo

    $originalFilename = basename($_FILES['Upload']['name']);
    $filename = $dir 
        . sha1(uniqid(mt_rand() + time(), true)) 
        . substr(
            $originalFilename, 
            strpos($originalFilename, '.'), 
            strlen($originalFilename)
        );

    $filenameArray = pathinfo($filename);

    $ext = array("jpeg", "jpg", "gif");
    $isGood = 0;

    if (file_exists($filename)) {
        echo "The file already exists<br>";
        $isGood = 1;
    }

    if ($_FILES['Upload']['size'] > 10000000) { # tamanho em bytes
        echo "File is over 10MB in size<br>";
        $isGood = 1;
    }

    if (!in_array($filenameArray['extension'], $ext)) {
        echo "File Type is not Allowed (Upload jpeg, jpg, gif)<br>";
        $isGood = 1;
    }

    if ($isGood != 1) {
        if (move_uploaded_file($_FILES['Upload']['tmp_name'], $filename)) {
            echo "<p>File was uploaded --> " . $filenameArray["basename"];
        } else {
            echo "Upload failed" . $_FILES['Upload']['name'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cadastro.css">

    <title>Formulário de cadastro de estudante</title>
</head>
<div class="titulo">
<H1>Cadastro do Perfil do Estudante</H1>
<img src="Imagens\user.png" height="20%" width="20%" alt="">
</div>
<body class="bg-light p-2 bg-opacity-50">

<Form id="estudanteForm" method="POST" action="estudante.register" Cadastro class="container" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="file" name="Upload" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
    <input type="submit">
  </div>

  <div class="col-sm">
    <label for="CPF">CPF</label>
    <input class="form-control" name="inputCPF" type="text" placeholder="CPF" aria-label="CPF" >
  </div> 

  <div class="col-sm">
    <label for="Nome">Nome Completo</label>
    <input class="form-control" name="inputNome" type="text" placeholder="Nome Completo" aria-label="Nome Completo" >
  </div>

  <div class="row g-3">
    <div class="col-sm-7">
      <label for="email">E-mail</label>
      <input class="form-control" name="inputEmail" type="email" placeholder="E-mail" aria-label="E-mail" >
    </div>
    <div class="col-sm">
      <label for="tel">Telefone</label>
      <input class="form-control" name="inputTelefone" type="text" placeholder="Telefone" aria-label="Telefone" >
    </div>       
    <div class="col-sm">
      <label for="Data de nascimento">Data de nascimento</label>
      <input class="form-control" name="inputNascimento" type="text" placeholder="dd/mm/aaaa" aria-label="Data de nascimento" >
    </div>
  </div>

  <div class="row g-3">
    <div class="col-sm">
      <label for="endereco">Endereço</label>
      <input class="form-control"  name="inputEndereco" type="text" placeholder="Endereço" aria-label="Endereço" >
    </div>

    <div class="col-sm">
      <label for="bairro">Bairro</label>
      <input class="form-control" name="inputBairro" type="text" placeholder="Bairro" aria-label="Bairro" >
    </div>
  </div>

  <div class="row g-3">
    <div class="escolaridade col-sm">
      <label for="Escolaridade">Nível de Escolaridade</label>
      <select class="form-select" name="inputEscolaridade"  aria-label="Default select example">
        <option selected>Escolha uma opção</option>
        <option value="1">Ensino Fundamental Completo</option>
        <option value="6">Ensino Fundamental Incompleto</option>
        <option value="2">Ensino Médio Completo</option>
        <option value="4">Ensino Médio Incompleto</option>
        <option value="3">Ensino Superior Completo</option>
        <option value="5">Ensino Superior Incompleto</option>
      </select>
    </div>
    <div class="instituicao col-sm">
      <label for="instituicao">Estuda em outra instituição atualmente</label>
      <select class="form-select" name="inputInstituicao" aria-label="Default select example">
        <option selected>Escolha uma opção</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>
 
  <div class="col-sm">
    <label for="instituicao">Caso afirmativo, qual instituição?</label>
    <input class="form-control" name="inputInstituicaoNome" type="text"  placeholder="Informe a instituição" aria-label="instituicao" >
  </div>

  <div class="col-sm">
    <label for="curso">Qual curso?</label>
    <input class="form-control" name="inputCurso" type="text" placeholder="Informe o curso realizado" aria-label="curso" >
  </div>

  <div class="col-sm">
    <label for="motivo">Por qual motivo você escolheu se matricular em um curso do Senac RJ?</label>
    <textarea class="form-control" name="inputMotivo" rows="5" type="text" placeholder="Informe o motivo" aria-label="motivo" id="textarea"></textarea>
  </div>

  <div class="col-sm">
    <label for="motivo">O que te levou a escolher este curso?</label>
    <textarea class="form-control" name="inputEscolha" rows="5" type="text" placeholder="Informe o motivo" aria-label="motivo" id="textarea"></textarea>
  </div>

  <div>
    <label for="XP">Você tem experiência na área profissional do curso?</label>
    <textarea class="form-control" name="inputExperiencia" rows="5" type="text" placeholder="Informe a sua experiência" aria-label="XP" id="textarea"></textarea>
  </div>
  
  <div>
    <label for="Expectativas">Quais são as suas expectativas após a conclusão do curso?</label>
    <textarea class="form-control" name="inputExpectativa" rows="5" type="text" placeholder="Informe a sua expectativa" aria-label="expectativa" id="textarea"></textarea>
  </div>
  <hr>
  <!-- Botão Cadastrar -->
  <button class="btn btn-warning link-dark mb-3" type="submit">Cadastrar</button>
  <!--   <button class="btn btn-outline-primary" type="submit">Limpar Tela</button> -->

</Form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>