<?php
include "conexao.php";

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <style>
    body {
        background-color: #121212;
        color: #d5f1e3ff;
        font-family: Arial, sans-serif;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        background-color: #1e1e1e;
        color: #d5f1e3ff;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }
    th, td {
        border: 1px solid #333333;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #2c2c2c;
        color: #d5f1e3ff;
    }
    tr:nth-child(even) {
        background-color: #252525;
    }
    tr:nth-child(odd) {
        background-color: #1a1a1a;
    }
    a {
        text-decoration: none;
        margin: 0 5px;
    }
    .btn {
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
        transition: 0.2s;
    }
    .editar {
        background: #3a946bff;
        color: #d5f1e3ff;
    }
    .editar:hover {
        background: #337f55ff;
    }
    .excluir {
        background: #98193bff;
        color: #d5f1e3ff;
    }
    .excluir:hover {
        background: #5f0b27ff;
    }
    .novo {
        background: #004dbaff;
        color: #d5f1e3ff;
        padding: 10px 15px;
        display: inline-block;
        margin: 20px;
    }
    .novo:hover {
        background: #001bb5ff;
    }
    </style>
</head>
<body>
    <h1 style="text-align:center;">LISTA DE USUÁRIOS</h1>

    <div style="text-align:center;">
        <a href="form_usuario.php" class="novo">+ Novo Usuário</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Data Inclusão</th>
            <th>Data Alteração</th>
            <th>Ações</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nome'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['cpf'] ?></td>
                    <td><?= $row['data_inclusao'] ?></td>
                    <td><?= $row['data_alteracao'] ?></td>
                    <td>
                        <a class="btn editar" href="form_usuario.php?id=<?= $row['id'] ?>">Editar</a>
                        <a class="btn excluir" href="excluir_usuario.php?id=<?= $row['id'] ?>" onclick="return confirm('Deseja excluir este usuário?')">Excluir</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="7">Nenhum usuário cadastrado</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>