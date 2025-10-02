<?php
require_once __DIR__ . '/../app/config.php'; 

if (!isset($_SESSION['pk_usuario'])) {
    header('Location: ' . BASE_URL . '/index.php');
    exit;
}
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
    <nav class="navbar bg-success navbar-expand ">
        <ul class="navbar-nav justify-content-between w-100">
            <li class="nav-item active">
                <a class="nav-link link-light" href="<?= BASE_URL ?>/index.php?acao=listar">Página Inicial</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link link-light ms-auto" href="<?= BASE_URL ?>/index.php?acao=logout">Sair</a>
            </li>
        </ul>
    </nav>

<div class="container-fluid">
        <form method="POST" action="<?= BASE_URL ?>/index.php?acao=editar&id=<?php echo $encontrado['pk_usuario'];?>"> 
            <div class="form-group">
                <div class="row justify-content-center align-items-centers">
                    <div class="col-md-auto">
                        <label>
                            E-mail:
                        </label>
                        <input type="email" class="form-control" name="email" value="<?php echo $encontrado['email_usuario'];?>">
                    </div>
                </div>
                <div class="row justify-content-center align-items-centers">
                    <div class="col-md-auto">
                        <label>Senha:</label> 
                        <input type="password" class="form-control" name="senha" >
                    </div>
                </div>
                <div class="row justify-content-center align-items-centers">
                    <div class="col-md-auto">
                        <input type="submit" value="Editar" class="btn btn-success mt-2">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>