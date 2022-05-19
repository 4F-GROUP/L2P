<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">

    <title>Login</title>
</head><body>
<div id="login-form-wrap" style="margin-top: 15%;">
  <h2>Sistema | Senac Gerenciamento </h2>
  <Form Cadastro class="funcionario container" action="user.login" method="post">
    <p>
        <!-- <label for="matricula">Matrícula</label> -->
        <input type="text" name="inputMatricula" class="form-control" placeholder="Usuário" aria-label="Matricula" required>
    </p>
    <p>
        <!-- <label for="senha">Senha</label> -->
        <input type="password" name="inputSenha" class="form-control" placeholder="Senha" aria-label="Senha" required>
    </p>
    <p>
    <input type="submit" id="login" value="Entrar">
    </p>
  </form>
  <div id="create-account-wrap">
    <!-- <p>Esqueceu a Senha? <a href="#">Recuperar Senha</a><p> -->
  </div>
</div>
  
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>