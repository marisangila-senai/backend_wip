## **Requisitos Funcionais (RF)**

### **RF1 – Gerenciamento de Autenticação**

* **RF1.1**: O sistema deve permitir que **Convidados** façam login utilizando email e senha.
* **RF1.2**: O sistema deve validar o login e exibir mensagem de erro em caso de credenciais inválidas.
* **RF1.3**: O sistema deve permitir que **usuários conectados** façam logout.
* **RF1.4**: O sistema deve impedir o acesso às telas internas (Home, Editar, Cadastrar Usuário, Listar Usuários) sem login.

---

### **RF2 – Cadastro de Usuário**

* **RF2.1**: O sistema deve permitir que **Convidados** se cadastrem, fornecendo email e senha.
* **RF2.2**: O sistema deve permitir que **Administradores, Usuarios** cadastrem novos usuários.
* **RF2.3**: O sistema deve armazenar senha utilizando **hash seguro (SHA-512)**.
* **RF2.4**: O sistema deve redirecionar o usuário para a tela de login após cadastro.

---

### **RF3 – Listagem de Usuários**

* **RF3.1**: O sistema deve exibir uma tabela com todos os usuários cadastrados.
* **RF3.2**: A tabela deve exibir colunas: ID, Email, Administrador e Ações.
* **RF3.3**: A ação “Visualizar” deve estar sempre disponível para todos os usuários conectados.
* **RF3.4**: Editar e Excluir só devem aparecer para **Administradores**.

---

### **RF4 – Edição de Usuário**

* **RF4.1**: O sistema deve permitir que **Administradores** editem informações de usuários existentes.
* **RF4.2**: O sistema deve permitir alterar email, senha e ~~status~~ de administrador.
* **RF4.3**: Após a edição, o sistema deve redirecionar para a tela de listagem de usuários.

---

### **RF5 – Exclusão de Usuário**

* **RF5.1**: O sistema deve permitir que **Administradores** excluam usuários.
* **RF5.2**: ~~O sistema deve solicitar confirmação antes da exclusão.~~
* **RF5.3**: Após a exclusão, o sistema deve atualizar a listagem de usuários.

---

### **RF6 – Interface e Navegação**

* **RF6.1**: O sistema deve ter **navbar** com links visíveis de acordo com o perfil do usuário (Convidado, Usuário, Admin).
* **RF6.2**: O sistema deve fornecer transições entre telas:

  * Login → Home
  * Login → Cadastro
  * Logout → Login
  * Cadastro → Login
  * Home → Editar Usuário (Admin)
  * Home → Cadastrar Usuário
  * Home → Login 

---

### **RF7 – Segurança**

* **RF7.1**: Todas as ações de CRUD (Cadastrar, Editar, Excluir, Listar) devem verificar login.
* **RF7.2**: Acesso a páginas administrativas deve ser restrito a administradores.
* **RF7.3**: O sistema deve impedir execução de ações sem métodos HTTP corretos (GET/POST).

