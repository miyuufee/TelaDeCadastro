<?php
include "conexao.php";

$id    = $_POST['id'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf   = $_POST['cpf'];
$dataAtual = date("Y-m-d H:i:s");

if ($id > 0) {

    if (!empty($senha)) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios 
                SET nome='$nome', email='$email', senha='$senhaHash', cpf='$cpf', data_alteracao='$dataAtual'
                WHERE id=$id";
    } else {
        $sql = "UPDATE usuarios 
                SET nome='$nome', email='$email', cpf='$cpf', data_alteracao='$dataAtual'
                WHERE id=$id";
    }
} else {
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (nome, email, senha, cpf, data_inclusao) 
            VALUES ('$nome', '$email', '$senhaHash', '$cpf', '$dataAtual')";
}

if ($conn->query($sql) === TRUE) {

    header("Location: listar_usuarios.php");
    exit;
} else {
    echo "Erro: " . $conn->error;
}
?>