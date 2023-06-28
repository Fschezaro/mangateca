<?php

include 'db.php';

$nome_responsavel = $_POST['nome_responsavel'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];

$query = "INSERT INTO emprestimos (nome_responsavel,data_inicio,data_fim) VALUES ($nome_responsavel,'$data_inicio','$data_fim')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=livros');