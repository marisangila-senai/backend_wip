# 📘 Documentação do Projeto – Web CRUD Usuários


- [📘 Documentação do Projeto – Web CRUD Usuários](#-documentação-do-projeto--web-crud-usuários)
  - [Visão Geral](#visão-geral)
  - [Configuração do Projeto](#configuração-do-projeto)
  - [Diagramas UML e Modelos](#diagramas-uml-e-modelos)
  - [Modelo de Banco de Dados](#modelo-de-banco-de-dados)
  - [Estrutura do Código](#estrutura-do-código)
  - [Limitações](#limitações)
    - [Funcionais](#funcionais)
    - [Segurança](#segurança)
    - [Estruturais](#estruturais)
---

## Visão Geral

O **Web CRUD Usuários** é um sistema que permite:
- Cadastro e autenticação de usuários
- Listagem de todos os usuários
- Edição e exclusão (para administradores)
- Controle de acesso por tipo de usuário (convidado, usuário, administrador)

Ele utiliza:
- **PHP (procedural + classes)**
- **MySQL (via PDO)**
---

## Configuração do Projeto

Para detalhes sobre instalação, pré-requisitos e execução, consulte o [README.md](../../README.md).

---

## Diagramas UML e Modelos

| Tipo | Arquivo | Descrição |
|------|----------|-----------|
| Diagrama de Classes | [`docs/class_diagram.svg`](../class_diagram.svg) | Estrutura de classes e relacionamentos |
| Caso de Uso | [`docs/user_case_diagram.svg`](../user_case_diagram.svg) | Interação entre atores e funcionalidades |
| Fluxo de Aplicação | [`docs/flowchart.svg`](../flowchart.svg) | Passos e ações do usuário |
| Modelo ER | [`docs/mer.svg`](../mer.svg) | Entidades e relacionamentos do banco |

---

## Modelo de Banco de Dados

Arquivo: [`docs/mer.mmd`](../mer.mmd)

Entidade principal: **Usuário**

| Campo | Tipo | Descrição |
|-------|------|------------|
| id | INT (PK) | Identificador |
| email | VARCHAR | E-mail único |
| senha | VARCHAR | Senha com hash |
| eh_adm | BOOLEAN | Define se é administrador |

Scripts SQL:  
- [`criar_banco_dados.sql`](../../database/criar_banco_dados.sql)  
- [`usuario_aplicacao.sql`](../../database/usuario_aplicacao.sql)  
- [`tornar_usuario_adm.sql`](../../database/tornar_usuario_adm.sql)

---

## Estrutura do Código

| Pasta | Conteúdo |
|-------|-----------|
| `app/` | Lógica de negócios e classes |
| `public/` | Telas do sistema |
| `database/` | Scripts SQL |
| `docs/` | Documentação e diagramas |
| `index.php` | Ponto de entrada |

Gateway controla todas as ações com base no parâmetro `acao` via `$_GET` ou `$_POST`.

---

Perfeito! Aqui está a versão ajustada da sua seção **Limitações**, **sem ícones** e mantendo um tom profissional e claro para documentação em `README.md`:

---

## Limitações

### Funcionais

* O sistema não é responsivo (não se adapta a diferentes tamanhos de tela).
* Não possui feedback visual detalhado para erros de formulário.
* Falta confirmação de ações críticas (como exclusão de registros).

### Segurança

* Ausência de validação nos formulários via **JavaScript**.
* **Sem confirmação** ao excluir usuários.
* **Senhas armazenadas com hash fixo**, sem uso de *salt*.
* **Sem proteção contra CSRF** (Cross-Site Request Forgery).
* **Sem controle de taxa de requisições** (*rate limit*) para evitar ataques de força bruta.
* Ausência de sanitização avançada de entrada de dados e de logs de auditoria.

### Estruturais

* Projeto não segue um padrão de arquitetura (como **MVC**).
* **Todo o código-fonte é acessível** diretamente no servidor.
* **Sem separação de camadas** (controlador, modelo, visão).

---

> **Aviso Importante**
> Este projeto foi desenvolvido **exclusivamente para fins didáticos**, com foco em demonstrar um **CRUD orientado a objetos em PHP**, **sem considerar práticas avançadas de segurança ou arquitetura**.
> **Não deve ser utilizado em ambiente de produção sem refatoração.**


