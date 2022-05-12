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
    <link rel="stylesheet" href="Cadastro.css">

    <title>Alunos</title>
</head>
<body>

<section class="page-section" id="estudante">
    <div class="container">
        <div class="text-center titulo mt-4">
            <h2 class="section-heading">Sistema de Gerenciamento de Estudantes</h2>
            <h3 class="section-subheading text-muted">Utilize a tabela abaixo para editar ou excluir as informações sobre os estudantes.</h3>
        </div>
        <table class="table table-stripped table-hover" style="color: black;">
            <thead>
                <th>#</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Criado Em</th>
                <th>Gerir</th>
            </thead>
            <tbody>
            <?php foreach ($EstudanteService->listar(20) as $index => $estudante): ?>
                <tr>
                    <td><?= $estudante->getId() ?></td>
                    <td><?= $estudante->getCPF() ?></td>
                    <td><?= $estudante->getNome() ?></td>
                    <td><?= $estudante->getEndereco() ?></td>
                    <td><?= $estudante->getCriadoEm() ?></td>
                    <td>
                        <a href="estudante.details.php?id=<?= $estudante->getId() ?>"><i class="bi bi-pencil-square"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></i></a>&nbsp;
                        <a onclick="return confirm('Deseja realmente remover este item?')" href="estudante.delete.php?id=<?= $estudante->getId() ?>"><i class="bi bi-trash"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <?php if($_GET) : ?>
                <tfoot>
                    <tr>
                        <?php if(isset($_GET['error'])): ?>
                            <td colspan="6"><h3 style="font-size: small;" class="text-danger"><strong>Ocoreu um erro ao tentar editar/apagar no banco.</strong></h3></td>
                        <?php elseif(isset($_GET['success'])): ?>
                            <td colspan="6"><h3 style="font-size: small;" class="text-success"><strong>Editado/Apagado com sucesso do banco.</strong></h3></td>
                        <?php endif; ?>
                    </tr>
                </tfoot>
            <?php endif; ?>
        </table>
    </div>
</section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>