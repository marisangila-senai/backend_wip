# Web Application CRUD em PHP com POO

> **Aviso Importante**

Este projeto foi desenvolvido **apenas como exemplo didático de CRUD usando POO em PHP**, sem utilizar nenhuma arquitetura de projeto (MVC ou similar). **Não considera critérios de segurança** e **todo o código-fonte fica exposto no servidor**.

---

## Requisitos

* PHP >= 8.0
* Servidor web Apache ou similar
* MySQL/MariaDB

---

## Estrutura do Projeto

```
web_crud/
├── app/        # Classes PHP (Conexao, Usuario, Gateway, Login)
├── database/   # Script SQL para criação do banco de dados
├── public/     # Páginas acessíveis via navegador (login, cadastrar, home)
├── index.php   # Ponto de entrada do sistema
└── README.md
```

* **`index.php`**: ponto de entrada do sistema. Redireciona as ações para o `Gateway`.
* **`app/`**: contém todas as classes do sistema. Não deve ser acessado diretamente pelo navegador.
* **`public/`**: páginas web que são acessíveis pelo usuário.
* **`database/`**: script SQL para criar tabelas e dados iniciais.

---

## BASE_URL e base_dir

* **BASE_URL**: constante definida em `app/config.php` que indica a URL base do projeto.

  ```php
  define('BASE_URL', '/web_crud');
  ```

  * Usada em links e formulários das páginas dentro de `public/`.
  * Atualize caso o nome da pasta ou o caminho mude.

* **base_dir**: representa a raiz do projeto no servidor (`/var/www/html/web_crud`).

  * Arquivos em `public/` são acessíveis pelo navegador.
  * Arquivos em `app/` não devem ser acessados diretamente pelo usuário.

---

## Configuração do Servidor

* **Apache**: configure a `DocumentRoot` para `/var/www/html` (ou `htdocs` no XAMPP).
* Após clonar o projeto, ele estará disponível em:

```
http://localhost/web_crud/
```

* O `index.php` é responsável por chamar o `Gateway` e executar as ações do sistema.

---

## Banco de Dados

1. Crie o banco de dados e usuário conforme definido em `app/Conexao.php`.
2. Importe o script SQL `database/database.sql`.
3. Para testes locais, as credenciais podem ficar hardcoded no `Conexao.php`, mas **não faça isso em produção**.

---

## Observações de Segurança

> ⚠️ Este projeto é apenas educacional. Para produção, recomenda-se:

1. **Mover o código sensível para fora da raiz pública** (`public_html` ou `www`).
2. **Usar variáveis de ambiente** ou arquivos `.env` para credenciais de banco:

   ```env
   DB_HOST=
   DB_NAME=
   DB_USER=
   DB_PASS=
   ```
3. **Ignorar arquivos sensíveis no Git**:
   Crie `.gitignore` e inclua arquivos como `.env` e `config.php` para que não sejam enviados para repositórios públicos:

   ```
   .env
   config.php
   ```
---

## Executando o Projeto

1. Clone o projeto na raiz pública do servidor web:

```
cd /var/www/html
git clone <repositório> web_crud
```

2. Execute o script para criar o banco de dados e a tabela em `app/database/database.sql`

> No script sql em `app/database/usuario_aplicacao.sql` é possível alterar as credênciais de usuário do banco de dados.
   
3. Configure o banco de dados e ajuste credenciais em `app/Conexao.php`.
4. Abra no navegador:

```
http://localhost/web_crud/
```


