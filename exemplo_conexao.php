<?php

$host = 'localhost';
$user = 'seu_usuario';
$password = 'sua_senha';
$database = 'seu_banco';

$mysqli = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Erro na conexão (' . $conn->connect_errno . '): ' . $conn->connect_error);
}
?>
