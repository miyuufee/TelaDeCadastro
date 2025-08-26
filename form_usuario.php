<?php
include "conexao.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$nome = $email = $cpf = "";

if ($id > 0) {
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $cpf = $usuario['cpf'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            background-color: #121212;
            color: #d5f1e3ff;
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 0;
        }
        h2 {
            text-align: center;
        }
        form {
            max-width: 400px;
            width: 90%;
            margin: 20px auto;
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        label {
            display: block;
            margin-top: 15px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px 35px 8px 8px;
            margin-top: 5px;
            border: 1px solid #333333;
            border-radius: 5px;
            background-color: #252525;
            color: #d5f1e3ff;
            box-sizing: border-box;
            position: relative;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #3a946bff;
        }
        .password-container {
            position: relative;
        }
        .toggle-chave {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #d5f1e3ff;
            font-size: 1em;
        }
        .exemplos {
            display: block;
            margin-top: 5px;
            font-style: italic;
            font-size: smaller;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #004dbaff;
            color: #d5f1e3ff;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }
        button:hover {
            background-color: #001bb5ff;
        }
    </style>
</head>

<body>
    <h2><?php echo $id > 0 ? "Alterar Usuário" : "Cadastrar Usuário"; ?></h2>

    <form action="salvar_usuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label>NOME:</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>" required>

        <label>E-MAIL:</label>
        <p class="exemplos">Ex: emailprincipal@exemplo.com</p>
        <input type="email" name="email" value="<?php echo $email; ?>" required>

        <label>SENHA:</label>
        <div class="password-container">
            <input type="password" name="senha" id="senha" <?php echo $id > 0 ? "" : "required"; ?>>
            <span class="toggle-chave" onclick="toggleSenha()">🔑</span>
        </div>

        <label>CPF:</label>
        <p class="exemplos">Ex: 123.456.789-00</p>
        <input type="text" name="cpf" value="<?php echo $cpf; ?>" required>

        <button type="submit"><?php echo $id > 0 ? "Atualizar" : "Cadastrar"; ?></button>

        <button type="button" onclick="window.location.href='listar_usuarios.php'" class="btn btn-secondary">Retornar ao início</button>
    </form>
    

    <script>
        function toggleSenha() {
            const senhaInput = document.getElementById("senha");
            senhaInput.type = senhaInput.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>