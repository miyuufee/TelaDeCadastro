# Tela de Login com Cadastro de Usuários

Este projeto é uma aplicação simples em **PHP** que implementa uma tela de login e funcionalidades básicas de **CRUD de usuários** (criar, listar, editar e excluir).  

## 📌 Funcionalidades

- **Login de usuário** (página inicial `index.php`)
- **Cadastro de usuários** via formulário (`form_usuario.php`)
- **Listagem de usuários** (`listar_usuarios.php`)
- **Edição de informações de usuários** (via `form_usuario.php`)
- **Exclusão de usuários** (`excluir_usuario.php`)
- **Persistência em banco de dados** utilizando `conexao.php`
- **Salvar usuários** (inserção/atualização) via `salvar_usuario.php`

## 📂 Estrutura do Projeto

tela_de_login/
├── conexao.php # Script de conexão com o banco de dados
├── excluir_usuario.php # Exclusão de usuários
├── form_usuario.php # Formulário para cadastro/edição
├── index.php # Tela de login
├── listar_usuarios.php # Listagem de usuários cadastrados
└── salvar_usuario.php # Inserção/atualização de usuários

## 🚀 Tecnologias Utilizadas

- **PHP** (lógica do sistema)
- **MySQL** (armazenamento dos dados)
- **HTML/CSS** (estrutura e estilo das páginas)

## ⚙️ Pré-requisitos

- Servidor web local (ex: [XAMPP](https://www.apachefriends.org/) ou similar)  
- PHP instalado
- MySQL configurado

## 🛠️ Como executar

1. Clone este repositório:
   ```bash
   git clone https://github.com/miyuufee/TelaDeCadastro.git
