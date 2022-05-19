<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Home</title>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
    <?php 
	require("./navbar.php");
?> 
    <div class="menu" style="margin-left: 70px; margin-top: 5%;">
        <div class="example-item example-item_1"> 
            <a href="cadastro.php"> 
                <img src="Imagens/cadastro2.png" style="width: 90%; height: 90%; margin-right: 10px;">
            </a> 
            <p style="text-align: center; margin-top: 10%;">Cadastro Estudante</p>
        </div>
        <div class="example-item example-item_3"> 
            <a href="cadastro.funcionario.php"> 
                <img src="Imagens/cadastro2.png" style="width: 90%; height: 90%; margin-right: 10px;"> 
            </a>
            <p style="text-align: center; margin-top: 10%;">Cadastro Funcionário</p>
        </div>
        <div class="example-item example-item_2"> 
            <a href="estudantes.php"> 
                <img src="Imagens/lista-de-compras.png" style="width: 90%; height: 90%; margin-right: 10px;">
            </a> 
            <p style="text-align: center; margin-top: 13%;">Alunos</p>
        </div>
    </div>
</body>
</html>