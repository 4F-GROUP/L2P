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
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Home</title>
</head>
<body>

<section class="content">
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-box-archive"></i> <strong>Senac</strong>|Stock</h3>
                        <p class="text-muted">Sistema de cadastro para os estudantes do SENAC.</p>
                        <br>
                        <div class="text-muted">
                            <p class="text-sm">Sistema
                                <b class="d-block"><strong>Senac</strong>|Stock</b>
                            </p>
                            <p class="text-sm">Desenvolvedores
                                <b class="d-block">Gabriela Rosa</b>
                                <b class="d-block">Pedro Motta</b>
                                <b class="d-block">Raphael Moreira</b>
                                <b class="d-block">Thalis Mateus</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="menu">
                <div class="example-item example-item_1"> <a href="cadastro.php"> <img src="Imagens/cadastro 1.png"></a> Cadastro Estudante  </div>
                <div class="example-item example-item_3"> <a href="cadastro.funcionario.php"> <img src="Imagens/login 1.png"> </a>Cadastro Funcionário </div>
                <div class="example-item example-item_2"> <a href="estudantes.php"> <img src="Imagens/listar 1.png"></a> Alunos  </div>
            </div>
        </div>
    </div>
</section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>