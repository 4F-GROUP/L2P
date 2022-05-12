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
<div class="titulo">
  <H1>Cadastro de funcionário</H1>
</div>
<body class="bg-light p-2 bg-opacity-50">

  <Form Cadastro class="funcionario" action="user.register" method="post" >

  <div class="col-sm-7">
    <label for="matricula">Matrícula</label>
    <input type="text" name="inputMatricula" class="form-control" placeholder="matricula" aria-label="matricula" required>
  </div> 

  <div class="col-sm-7">
    <label for="Nome">Nome Completo</label>
    <input type="text" name="inputNome" class="form-control" placeholder="Nome Completo" aria-label="Nome Completo" required>
  </div>

  <div class="col-sm-7">
    <label for="email">E-mail</label>
    <input type="email" name="inputEmail" class="form-control" placeholder="E-mail" aria-label="E-mail" required>
  </div>  

  <div class="col-sm-7">
    <label for="senha">Senha</label>
    <input type="password" name="inputSenha" class="form-control" placeholder="Senha" aria-label="Senha" required>
  </div>  

  <div class="col-sm-7">
    <label for="senha">Repita a Senha</label>
    <input type="password" name="inputSenhaRepetida" class="form-control" placeholder="Senha" aria-label="Senha" required>
  </div>          
  <br>
  <!-- Botão Cadastrar -->
  <button class="btn btn-warning link-dark" type="submit">Cadastrar</button>
  <!--   <button class="btn btn-outline-primary" type="submit">Limpar Tela</button> -->
  </Form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>