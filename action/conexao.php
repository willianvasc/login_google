<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'login';

$conexao = mysqli_connect($host, $user, $password, $dbname);

if (!$conexao) {
    die('Erro ao conectar com o banco de dados: ' . mysqli_connect_error());
}

?>