<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Busca</title>
</head>
<body class="bg-light p-2 bg-opacity-50">
    <div class="container" style="width: 40%; margin-top: 13%"> 
        <form name="form">
            <fieldset>
                <h3 style="text-align: center; margin-bottom: 3%; color:#00468D;">Busca</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="ID">
                    <label for="floatingInput">ID</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="CPF">
                    <label for="floatingInput">CPF</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="Nome">
                    <label for="floatingInput">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="Email">
                    <label for="floatingInput">Email</label>
                </div>
                <button class="btn btn-warning link-dark" type="submit">Pesquisar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>