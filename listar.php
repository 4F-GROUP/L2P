<?php 
  require_once('config/config.php');
  $EstudanteService = new EstudanteService(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Listar</title>
</head>
<div class="titulo text-info">
    <H1>Pesquisar Aluno</H1>
</div>
<body>
<?php foreach ($EstudanteService->listar(20) as $index => $estudante): ?>
    <form Listar.ID class="estudante" action="busca?id=<?= $estudante->getId() ?>" method="post" >
    <div class="col-sm">
        <label for="ID">ID</label>
        <input type="text" name="inputIdentificador" class="form-control" placeholder="ID" aria-label="ID" >
      </div>       
    <br>
    <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
    </form>
    <br>
    <hr>
    <form Listar>
    <div class="col-sm">
        <label for="CPF">CPF</label>
        <input type="text" class="form-control" placeholder="CPF" aria-label="CPF" >
      </div>      
    <br>
    <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
    </form>
    <br>
    <hr>
    <form Listar>   
    <div class="col-sm">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" >
    </div>       
    <br>
    <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
    </form>
    <br>
    <hr>
    <form Listar>
    <div class="col-sm">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" placeholder="e-mail" aria-label="E-mail" >
    </div>       
    <br>
    <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
    </form>
    
<?php endforeach; ?>
</body>
</html>