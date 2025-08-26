<?php
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'seu_usuario';
$password = getenv('DB_PASS') ?: 'sua_senha';
$database = getenv('DB_NAME') ?: 'seu_banco';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die('Erro na conexão (' . $mysqli->connect_errno . '): ' . $mysqli->connect_error);
}
?>
