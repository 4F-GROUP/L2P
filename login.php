<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/cadastro.css">

  <title>Login</title>
</head>
<body class="bg-light p-2 bg-opacity-50">
  <div class="container" style="width: 40%; margin-top: 13%; color:#00468D;">
    <form name="form">
      <h3 style="text-align: center; margin-bottom: 3%;">Login</h3>                
      <fieldset>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="email">
          <label for="floatingInput">Email ou Matrícula</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="senha">
          <label for="floatingInput">Senha</label>
        </div>
        <input type="submit" class="btn btn-warning" name="Entrar" value="Entrar">
        <button class="btn btn-warning link-dark" type="submit"><a class="text-decoration-none link-dark" href="cadastro.funcionario.php">Registrar</a></button>
      </fieldset>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>