# Sistema de Gerenciamento e Cadastro de Usuários em PHP

Este projeto é um sistema simples de gerenciamento de usuários desenvolvido em PHP, com funcionalidades básicas de CRUD (Criar, Ler, Atualizar e Deletar).

## Funcionalidades

- Conexão com banco de dados MySQL (`conexao.php`)
- Listagem de usuários (`listar_usuarios.php`)
- Cadastro e edição de usuários (`form_usuario.php` e `salvar_usuario.php`)
- Exclusão de usuários (`excluir_usuario.php`)
- Página inicial (`index.php`)

## Como Usar

1. Clone o repositório:
   ```bash
   git clone <URL_DO_REPOSITORIO>

---

### **.gitignore**

```gitignore
# Ignorar arquivos de configuração sensíveis
conexao.php

# Ignorar arquivos temporários do PHP
*.log
*.cache
*.tmp
*.bak

# Ignorar diretórios de cache do sistema
/tmp
/vendor/
