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
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar bg-success navbar-expand ">
        <ul class="navbar-nav justify-content-between w-100">
            <li class="nav-item active">
                <a class="nav-link link-light" href="cadastrar.php">Cadastrar Usuário</a>
            </li>
            <li class="nav-item active">
               <a class="nav-link link-light ms-auto" href="<?= BASE_URL ?>/index.php?acao=logout">Sair</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-centers">
            <div class="col-md-auto">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>E-mail</th>
                            <th>Administrador</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $u): ?>
                            <tr>
                                <td><?= $u['pk_usuario'] ?></td>
                                <td><?= htmlspecialchars($u['email_usuario']) ?></td>
                                <td><?= $u['eh_adm_usuario'] ? 'Sim' : 'Não' ?></td>
                                <td>
                                                <?php if ($_SESSION['eh_adm_usuario'] == 1): ?>
                                                    <a href="<?= BASE_URL ?>/index.php?acao=buscarid&pk_usuario=<?= $u['pk_usuario'] ?>">Editar</a>
                                                    <a href="<?= BASE_URL ?>/index.php?acao=excluir&pk_usuario=<?= $u['pk_usuario'] ?>">Excluir</a>
                                                <?php else: ?>
                                                    Apenas leitura
                                                <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>