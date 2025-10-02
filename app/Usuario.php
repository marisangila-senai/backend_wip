<?php
require_once __DIR__ . '/Conexao.php';

Class Usuario {
    private $id;
    private $conexao;
    private $email;
    private $senha;
    private $eh_adm;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getConexao() {
        return $this->conexao;
    }
    public function setConexao($conexao) {
        $this->conexao = $conexao;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getEhAdm() {
        return $this->eh_adm;
    }
    public function setEhAdm($eh_adm) {
        $this->eh_adm = $eh_adm;
    }
    public function __construct() {
        $this->conexao = new Conexao();
    }
    public function inserir(){
        $this->senha = hash('sha512', $this->senha);
        $consulta = $this->conexao->prepare("INSERT INTO usuario(email_usuario,senha_usuario) VALUES(?,?)");      
        $consulta->execute([$this->email, $this->senha]);
    }
    public function listar(){
        $consulta = $this->conexao->prepare("SELECT pk_usuario, email_usuario, eh_adm_usuario FROM usuario");      
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    public function buscar(){
        $consulta = $this->conexao->prepare("SELECT pk_usuario, email_usuario, eh_adm_usuario FROM usuario WHERE pk_usuario = ?");      
        $consulta->execute([$this->id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    public function atualizar(){
        $this->id = $_GET["id_usuario"];
        $consulta = $this->conexao->prepare("UPDATE SET email_usuario = ?, senha_usuario = ? FROM usuario WHERE pk_usuario = ?");      
        $consulta->execute([$this->id]);
    }
    public function excluir(){
        try {
            $consulta = $this->conexao->prepare("DELETE FROM usuario WHERE pk_usuario = ?");
            $consulta->execute([$this->id]);
        } catch (PDOException $e) {
            echo "Erro ao excluir usuário: " . $e->getMessage();
        }
    }
    public function buscarPorEmail($email): PDOStatement  {
        $consulta = $this->conexao->prepare("SELECT pk_usuario, senha_usuario, eh_adm_usuario FROM usuario WHERE email_usuario = ?");
        $consulta->execute([$email]);
        return $consulta;
    }
}