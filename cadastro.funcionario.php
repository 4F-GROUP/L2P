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
<body class="bg-light p-2 bg-opacity-50">
  <div class="btn-container mt-2 ms-2">
    <button class="btn btn-warning link-dark mb-3" type="submit"><a class="text-decoration-none link-dark" href="home.php">Home</a></button>
  </div>
  <div class="container" style="width: 70%; margin-top: 10%; color:#00468D;">
    <form class="funcionario" action="user.register" method="post">
        <h3 style="text-align: center; margin-bottom: 2%;">Cadastro Funcionário</h3>          
        <fieldset>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="inputMatricula" required>
            <label for="floatingInput">Matrícula</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="inputNome" required>
            <label for="floatingInput">Nome Completo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="inputName" required>
            <label for="floatingInput">E-mail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" name="inputSenha" required>
            <label for="floatingInput">Senha</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" name="inputSenhaRepetida" required>
            <label for="floatingInput">Repita a Senha</label>
          </div>
          <input type="submit" class="btn btn-warning" name="inputRegistrar">
        </fieldset>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>