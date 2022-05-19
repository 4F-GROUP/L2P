<?php  
  require_once('config/config.php');

  $UsuarioService = new UsuarioService(); 
  $usuario = $UsuarioService->localizar($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cadastro.css">

    <title>Cadastro</title>
</head>
<?php 
	require("./navbar.php");
?>
<div class="titulo" style="margin-top: 8%;">
  <h2>Cadastro de Funcionário</h2>
</div>
<body class="bg-light p-2 bg-opacity-50">
  <div class="container" style="margin-left: 350px; margin-top: 2%;">
    <form Cadastro class="funcionario" action="user.edit" method="post" >
    <div class="form-group">
        <label for="idIdentificador">Identificador</label>
        <input type="text" id="idIdentificador" name="inputIdentificador" class="form-control" value="<?= $usuario->getId() ?>" readonly/>
    </div>
    <div class="form-group">
        <!-- Matricula input-->
        <input class="form-control" id="matricula" name="inputMatricula" value="<?= $usuario->getMatricula() ?>" readonly/>
    </div>
    <div class="form-group">
        <!-- Nome input-->
        <input class="form-control" id="nome" name="inputNome" value="<?= $usuario->getNome() ?>" type="text" placeholder="Informe o nome *" data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="nome:required">Informe o nome.</div>
    </div>
    <div class="form-group">
        <!-- Email input-->
        <input class="form-control"  id="email" name="inputEmail" value="<?= $usuario->getEmail() ?>" type="text" placeholder="Informe o email *" data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="email:required">Informe o email.</div>
    </div>
    <div class="form-group mb-md-0">
        <!-- Senha input-->
        <input class="form-control" id="senha" name="inputSenha" value="<?= $usuario->getSenha() ?>" type="password" placeholder="Informe a senha *" data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="senha:required">Informe a senha.</div>
    </div>
    <div class="form-group mb-md-0">
        <!-- Senha Repetida input-->
        <input class="form-control"  id="senha2" name="inputSenhaRepetida" value="<?= $usuario->getSenha() ?>" type="password" placeholder="Repita a senha *" data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="senha2:required">Repita a senha.</div>
    </div>
      <br>
      <!-- Botão Cadastrar -->
      <button class="btn btn-warning link-dark" type="submit">Alterar</button>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>