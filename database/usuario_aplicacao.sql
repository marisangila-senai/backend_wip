-- Criar um usuário no banco de dados para a conexão da aplicação.
USE db;

CREATE USER 'user'@'localhost' IDENTIFIED BY '123';
GRANT ALL PRIVILEGES ON db.* TO 'user'@'localhost';