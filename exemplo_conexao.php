<?php

$host = 'localhost';
$user = 'seu_usuario';
$password = 'sua_senha';
$database = 'seu_banco';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die('Erro na conexão (' . $mysqli->connect_errno . '): ' . $mysqli->connect_error);
}
?>
