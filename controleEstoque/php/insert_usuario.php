<?php

include 'conexao.php';

$nm_usuario = $_POST['nome'];
$dt_nascimento = $_POST['data'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$setor = $_POST ['setor'];




$insert = "INSERT INTO tb_usuario VALUES (NULL, '$nm_usuario', '$dt_nascimento', '$login', '$senha', '$setor')";

$query = $conexao->query($insert);

if($query == true){
    echo "<script>alert('Usuario Cadastro com sucesso'); history.back() </script>";
} else {
    echo "<script> alert('Erro ao Cadastrar'); history.back() </script>";
}

?>