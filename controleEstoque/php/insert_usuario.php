<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nm_usuario'];
    $dataNascimento = $_POST['dt_nascimento'];
    $login = $_POST['login'];
    $senha = $_POST['senha']; 
    $setor = $_POST['setor'];


    $sql = "INSERT INTO tb_usuario (nm_usuario, dt_nascimento, login, senha, setor) 
            VALUES ('$nome', '$dataNascimento', '$login', '$senha', '$setor')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    $conn->close();
}
?>



