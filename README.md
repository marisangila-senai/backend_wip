## Projeto Exemplo para conteúdo backend com PHP para disciplina de Desenvolvimento de Sistemas.

### **Passo 1: Baixar e Instalar o Git no Windows**

1. **Acesse o site oficial do Git**:

   * Vá para o [site oficial do Git](https://git-scm.com/) e clique em **"Download"** para Windows.

2. **Inicie o Instalador**:

   * Após o download, execute o instalador (`.exe`).

3. **Escolher as Opções de Instalação**:

   * Durante o processo de instalação, você verá várias opções. As configurações padrão geralmente são as mais recomendadas:

     * **Escolha do Editor**: Você pode escolher o editor de texto padrão (como Visual Studio Code) ou deixar o Git usar o editor de texto padrão do sistema.
     * **Ajustes de PATH**: Certifique-se de escolher a opção "Git from the command line and also from 3rd-party software" para garantir que o Git seja acessível no terminal do Windows.

4. **Finalizar a Instalação**:

   * Após concluir as opções, clique em "Next" até o final do processo e, por fim, clique em "Install".
---

### **Passo 2: Configurar o Usuário no Git**

Agora que o Git está instalado, configure seu nome de usuário e e-mail.

1. **Configurar o Nome de Usuário**:

   * No **git bash** ou temrinal VS Code, digite:

     ```bash
     git config --global user.name "Seu Nome"
     ```

2. **Configurar o E-mail**:

   * Em seguida, configure seu e-mail associado ao Git:

     ```bash
     git config --global user.email "seuemail@dominio.com"
     ```
---

### **Passo 3: Clonar o Repositório**

Clonar o repositório desejado para o seu computador.

1. **Obtenha o URL do Repositório**:

   * No GitHub, GitLab ou qualquer plataforma onde o repositório está hospedado, copie a URL do repositório (geralmente no formato `https://` ou `git@`).

2. **Clonar o Repositório**:

   * No terminal do VS Code, navegue até o diretório onde deseja armazenar o repositório clonado e execute:

     ```bash
     git clone https://github.com/marisangila-senai/backend_wip.git
     ```

   > **Exemplo**:

   ```bash
   git clone https://github.com/usuario/repo.git
   ```

3. **(Opcional) Acessar o Repositório Clonado**:

   * Após o download do repositório, entre no diretório do repositório clonado:

     ```bash
     cd nome-do-repositorio
     ```
     
---

### **Passo 4: Criar uma Nova Branch**

1. **Criar e Mudar para uma Nova Branch**:

   * Crie uma nova branch com seu nome. No terminal ou **git bash**, digite:

     ```bash
     git checkout -b nome-da-pessoa
     ```

2. ** (Opcional) Confirmar que a Branch foi Criada**:

   * Para verificar em qual branch você está, use o comando:

     ```bash
     git branch
     ```
