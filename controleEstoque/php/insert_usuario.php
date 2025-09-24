<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $login = $_POST['login'];
    $senha = $_POST['senha']; 
    $setor = $_POST['setor'];


    $sql = "INSERT INTO tb_usuario (nm_usuario, dt_nascimento, login, senha, setor) 
            VALUES ('$nome', '$dataNascimento', '$login', '$senha', '$setor')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }

    $conexao->close();
}
?>



