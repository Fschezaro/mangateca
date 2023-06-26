<?php

include 'db.php';

$nome = $_POST['nome'];
$permissao = $_POST['permissao'];


$query = "INSERT INTO usuarios (nome,permissao) VALUES ($nome, $permissao')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=usuarios');