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
    <link rel="stylesheet" href="./css/styles.css">

    <title>Home</title>
</head>
<div class="titulo text-info">
<H1>Sistema de Controle de Estudantes</H1>
<img src="Imagens\user.png" height="20%" width="20%" alt="">
</div>
<body>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Senac</strong>|Stock</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <h4>Últimos estudantes adicionados</h4>
                                <p>
                                    <a href="cadastro" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Adicionar Estudante</a>
                                </p>
                                <p>
                                    <a href="estudantes" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Listar Estudantes</a>
                                </p>
                                <?php foreach ($EstudanteService->listar(20) as $index => $estudante): ?>
                                <div class="col-12 col-sm-4">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <span class="info-box-text text-center text-muted"><?= $estudante->getCPF() ?></span>
                                            <span class="info-box-number text-center text-muted mb-0"><?= $estudante->getNome() ?></span>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <a href="estudante.details?id=<?= $estudante->getId() ?>" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Veja detalhes</a>
                                </p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
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
        </div>
    </div>
</section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>