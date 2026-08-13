# Inventário de Computadores - IFTO Campus Paraíso do Tocantins 🏫

Este projeto é uma aplicação web desenvolvida em **PHP** utilizando o paradigma de **Programação Orientada a Objetos (POO)**. Ele implementa as quatro operações básicas de um **CRUD** (Create, Read, Update, Delete) para gerenciar o inventário de computadores desktop de um Laboratório de Informática, no caso o LabIn - I, do Instituto Federal do Tocantins (IFTO) - Campus Paraíso do Tocantins.

## 1. Funcionalidades:

A aplicação permite o controle do parque tecnológico armazenando as seguintes características de cada máquina:

- **1.1 - Marca do Computador**
- **1.2 - Modelo da CPU**
- **1.3 - Modelo da Memória RAM**
- **1.4 - Modelo do Gabinete**
- **1.5 - Modelo do Monitor**

O sistema possui uma interface limpa e amigável, permitindo:

- **1º) Listar** todos os computadores cadastrados.
- **2º) Cadastrar** novas máquinas.
- **3º) Editar** as configurações de uma máquina existente.
- **4º) Excluir** uma máquina do inventário.

## 2. Tecnologias Utilizadas:

- **Frontend:** HTML5 e CSS3 puro;
- **Backend:** PHP 8+;
- **Banco de Dados:** MySQL.

## 3. Estrutura do Projeto:

O projeto adota uma arquitetura estruturada, separando responsabilidades, assemelhando-se a arquitetura MVC:

```text
Inventario_LabIn1_IFTO/
├── config/
│   └── Database.php         
├── models/
│   └── Computador.php       
├── dao/
│   └── ComputadorDAO.php   
├── public/                  
│   ├── css/
│   │   └── style.css        
│   ├── index.php            
│   ├── criar.php            
│   ├── editar.php           
│   └── deletar.php          
├── database.sql             
└── index.php                
```

**OBS.:** Prática acadêmica de POO em PHP voltada a componente curricular de Linguagens e Técnicas de Programação III.
