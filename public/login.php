<?php
    require_once __DIR__ . '/../app/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body class="bg-body">
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow" style="min-width: 300px;">
            <div class="card-body">
                <form method="POST" action="<?= BASE_URL ?>/index.php?acao=login">
                    <div class="form-group">
                        <div class="row justify-content-center align-items-centers">
                            <div class="col-md-auto">
                                <label>
                                    E-mail:
                                </label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-centers">
                            <div class="col-md-auto">
                                <label>Senha:</label>
                                <input type="password" class="form-control" name="senha">
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-centers">
                            <div class="col-md-auto">
                                <input type="submit" value="Login" class="btn btn-success mt-2">
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-centers">
                            <div class="col-md-auto">
                                <a href="<?= BASE_URL ?>/public/cadastrar.php">Cadastre-se</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>