<?php 
  require_once('config/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Cadastro.css">

    <title>Document</title>
</head>
<div class="titulo text-info">
<H1>Cadastro do Perfil do Estudante</H1>
<img src="Imagens\user.png" height="20%" width="20%" alt="">
</div>
<body>

<Form Cadastro class="container">
  <div class="mb-3">
    <label for="formFile" class="form-label">Escolher Foto</label>
    <input class="form-control" type="file" id="formFile">
  </div>

  <div class="col-sm">
    <label for="CPF">CPF</label>
    <input type="text" class="form-control" placeholder="CPF" aria-label="CPF" required>
  </div> 

  <div class="col-sm">
    <label for="Nome">Nome Completo</label>
    <input type="text" class="form-control" placeholder="Nome Completo" aria-label="Nome Completo" required>
  </div>

  <div class="row g-3">
    <div class="col-sm-7">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail" required>
    </div>
    <div class="col-sm">
      <label for="tel">Telefone</label>
      <input type="text" class="form-control" placeholder="Telefone" aria-label="Telefone" required>
    </div>       
    <div class="col-sm">
      <label for="Data de nascimento">Data de nascimento</label>
      <input type="date" class="form-control" placeholder="dd/mm/aaaa" aria-label="Data de nascimento" required>
    </div>
  </div>

  <div class="row g-3">
    <div class="col-sm">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" placeholder="Endereço" aria-label="Endereço" required>
    </div>
    <div class="col-sm">
      <label for="bairro">Bairro</label>
      <input type="text" class="form-control" placeholder="Bairro" aria-label="Bairro" required>
    </div>
  </div>

  <div class="row g-3">
    <div class="escolaridade col-sm">
      <label for="Escolaridade">Nível de Escolaridade</label>
      <select class="form-select" aria-label="Default select example">
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
      <select class="form-select" aria-label="Default select example">
        <option selected>Escolha uma opção</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

    <div>
      <label for="XP">Você tem experiência na área profissional do curso?</label>
      <textarea rows="5" type="text" class="form-control" placeholder="Informe a sua experiência" aria-label="XP" required></textarea>
    </div>
    
    <div>
      <label for="Expectativas">Quais são as suas expectativas após a conclusão do curso?</label>
      <textarea rows="5" type="text" class="form-control" placeholder="Informe a sua expectativa" aria-label="expectativa" required></textarea>
    </div>
    <!-- Botão Cadastrar -->
    
 
  <div class="col-sm">
    <label for="instituicao">Caso afirmativo, qual instituição?</label>
    <input type="text" class="form-control" placeholder="Informe a instituição" aria-label="instituicao" required>
  </div>

  <div class="col-sm">
    <label for="curso">Qual curso?</label>
    <input type="text" class="form-control" placeholder="Informe o curso realizado" aria-label="curso" required>
  </div>

  <div class="col-sm">
    <label for="motivo">Por qual motivo você escolheu se matricular em um curso do Senac RJ?</label>
    <textarea rows="5" type="text" class="form-control" placeholder="Informe o motivo" aria-label="motivo" required></textarea>
  </div>

  <div class="col-sm">
    <label for="motivo">O que te levou a escolher este curso?</label>
    <textarea rows="5" type="text" class="form-control" placeholder="Informe o motivo" aria-label="motivo" required></textarea>
  </div>

  <div>
    <label for="XP">Você tem experiência na área profissional do curso?</label>
    <textarea rows="5" type="text" class="form-control" placeholder="Informe a sua experiência" aria-label="XP" required></textarea>
  </div>
  
  <div>
    <label for="Expectativas">Quais são as suas expectativas após a conclusão do curso?</label>
    <textarea rows="5" type="text" class="form-control" placeholder="Informe a sua expectativa" aria-label="expectativa" required></textarea>
  </div>
  <!-- Botão Cadastrar -->
  <button class="btn btn-outline-primary" type="submit">Cadastrar</button>
  <!--   <button class="btn btn-outline-primary" type="submit">Limpar Tela</button> -->
</Form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>