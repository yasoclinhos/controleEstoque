<?php
$server = "localhost";
$user = "root";
$password = "root";
$database = "db_estoque";


$conexao = new mysqli($server, $user, $password, $database);

if (!$conexao) {
    echo "Falha na conexão";
}



?>