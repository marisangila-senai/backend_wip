<?php
    include_once("../source/listar1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar bg-success justify-content-start">
        <a class="navbar-brand" href="cadastrar.php">Cadastrar Usuário</a>
        <a class="navbar-brand" href="pagina_inicial.php">Página Inicial</a>
    </nav>
<div class="container-fluid">
        <!-- Implementar -->
        <form> 
            <div class="form-group">
                <div class="row justify-content-center align-items-centers">
                    <div class="col-md-auto">
                        <label>
                            E-mail:
                        </label>
                        <!-- Implementar -->
                        <input type="email" class="form-control" name="email" value="">
                    </div>
                </div>
                <div class="row justify-content-center align-items-centers">
                    <div class="col-md-auto">
                        <label>Senha:</label>
                        <!-- Implementar -->
                        <input type="password" class="form-control" name="senha" value="">
                    </div>
                </div>
                <div class="row justify-content-center align-items-centers">
                    <div class="col-md-auto">
                        <input type="submit" value="Editar" class="btn btn-success mt-2">
                    </div>
                </div>
            </div>
        </fom>
    </div>
</body>
</html>