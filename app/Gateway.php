<?php

require_once __DIR__ . '/Login.php';
require_once __DIR__ . '/Usuario.php';
require_once __DIR__ . '/Conexao.php';


class Gateway {

    public function run() {
        session_start();

        $acao = $_REQUEST['acao'] ?? '';

        switch ($acao) {
            case 'login':
                if ($this->verificarLogin()) {
                    $login = new Login();
                    if ($login->login()) {
                        header("Location: index.php?acao=listar");
                        exit;
                    } else {
                        echo "E-mail ou senha inválidos!";
                    }
                }
                break;

            case 'logout':
                $login = new Login();
                $login->logout();
                header('Location: index.php');
                exit;

            case 'listar':
                if ($this->verificarLogin()) {
                    $usuario = new Usuario();
                    $usuarios = $usuario->listar();
                    require_once __DIR__ . '/../public/home.php';
                }
                break;

            case 'buscarid':
                if ($this->verificarLogin() && $this->verificarGet()) {
                    $id = (int)($_GET['pk_usuario'] ?? 0);
                    $usuario = new Usuario();
                    $usuario->setId($id);
                    $encontrado = $usuario->buscar();
                    require_once __DIR__ . '/../public/editar.php';
                }
                break;

            case 'inserir':
                if ($this->verificarPost()) {
                    $usuario = new Usuario();
                    $usuario->setEmail($_POST['email'] ?? '');
                    $usuario->setSenha($_POST['senha'] ?? '');
                    $usuario->inserir();
                    header('Location: public/cadastrar.php');
                    exit;
                }
                break;

            case 'editar':
                if ($this->verificarLogin() && $this->verificarPost()) {
                    $usuario = new Usuario();
                    $usuario->setId((int)($_POST['id'] ?? 0));
                    $usuario->setEmail($_POST['email'] ?? '');
                    $usuario->setSenha($_POST['senha'] ?? '');
                    $usuario->atualizar();
                    header('Location: index.php?acao=listar');
                    exit;
                }
                break;

            case 'excluir':
                if ($this->verificarLogin() && $this->verificarGet()) {
                    $usuario = new Usuario();
                    $usuario->setId((int)($_GET['pk_usuario'] ?? 0));
                    $usuario->excluir();
                    header('Location: index.php?acao=listar');
                    exit;
                }
                break;
        }
    }

    private function verificarLogin() {
        if (!isset($_SESSION['pk_usuario'])) {
            header('HTTP/1.1 403 Forbidden');
            exit('Acesso negado');
        }
        return true;
    }

    private function verificarPost() {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    private function verificarGet() {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }
}
