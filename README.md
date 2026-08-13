# Inventário de Máquinas - IFTO Campus Paraíso do Tocantins 💻🏫

Este projeto é uma aplicação web desenvolvida em **PHP** utilizando o paradigma de **Programação Orientada a Objetos (POO)**. Ele implementa as quatro operações básicas de um **CRUD** (Create, Read, Update, Delete) para gerenciar o inventário de computadores desktop de um Laboratório de Informática do Instituto Federal do Tocantins (IFTO) - Campus Paraíso do Tocantins.

## 🚀 Funcionalidades

A aplicação permite o controle do parque tecnológico armazenando as seguintes características de cada máquina:
- **Marca do Computador**
- **Modelo da CPU**
- **Modelo da Memória RAM**
- **Modelo do Gabinete**
- **Modelo do Monitor**

O sistema possui uma interface limpa e amigável, permitindo:
- **Listar** todos os computadores cadastrados.
- **Cadastrar** novas máquinas.
- **Editar** as configurações de uma máquina existente.
- **Excluir** uma máquina do inventário.

## 🛠️ Tecnologias Utilizadas

- **Backend:** PHP 8+ (Programação Orientada a Objetos)
- **Banco de Dados:** MySQL (comunicação via PDO - PHP Data Objects para maior segurança e prevenção contra SQL Injection)
- **Frontend:** HTML5 e CSS3 puro (estilização acadêmica e responsiva)

## 📂 Estrutura do Projeto

O projeto adota uma arquitetura estruturada, separando responsabilidades (semelhante ao MVC):

```text
inventario_ifto/
├── config/
│   └── Database.php         # Classe responsável pela conexão com o Banco de Dados (PDO)
├── models/
│   └── Computador.php       # Classe Modelo (Atributos, Getters/Setters)
├── dao/
│   └── ComputadorDAO.php    # Classe de acesso aos dados (operações CRUD)
├── public/                  # Interface com o Usuário (Views)
│   ├── css/
│   │   └── style.css        # Estilos da aplicação
│   ├── index.php            # Listagem de máquinas (Read) e botões de ação
│   ├── criar.php            # Formulário de Cadastro (Create)
│   ├── editar.php           # Formulário de Edição (Update)
│   └── deletar.php          # Processamento da Exclusão (Delete)
├── database.sql             # Script de criação do banco de dados e tabela
└── index.php                # Redirecionamento para a pasta public/
```

## ⚙️ Como Instalar e Rodar o Projeto

Siga os passos abaixo para testar o projeto no seu ambiente local:

### 1. Requisitos
- Um servidor web local como **XAMPP**, **WAMP**, **MAMP** ou **Laragon**.
- O servidor deve ter suporte a PHP e MySQL.

### 2. Configuração do Banco de Dados
1. Abra o seu gerenciador de banco de dados (ex: MySQL Workbench ou phpMyAdmin).
2. Execute o arquivo `database.sql` fornecido na raiz do projeto. Isso criará o banco de dados `inventario_ifto` e a tabela `computadores`.

### 3. Configuração dos Arquivos
1. Extraia a pasta do projeto (ex: `inventario_ifto`) dentro do diretório público do seu servidor web (ex: `C:\xampp\htdocs\`).
2. Caso o seu MySQL possua uma senha para o usuário `root`, abra o arquivo `config/Database.php` e altere a propriedade `$password`:
   ```php
   private $username = "root";
   private $password = "sua_senha_aqui"; // Altere se necessário
   ```

### 4. Acessando a Aplicação
- Abra o navegador e acesse: `http://localhost/inventario_ifto`
- Você será redirecionado automaticamente para o painel principal do inventário.

---
**Atividade Acadêmica:** Prática de POO em PHP.
