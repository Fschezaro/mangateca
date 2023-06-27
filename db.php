<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "mangateca";

$conexao = mysqli_connect($servidor,$usuario,$senha,$db);

$query = "SELECT * FROM LIVROS";
$consulta_livros = mysqli_query($conexao, $query);

$query = "SELECT * FROM EMPRESTIMOS";
$consulta_emprestimos = mysqli_query($conexao, $query);

$query = "SELECT * FROM USUARIOS";
$consulta_usuarios = mysqli_query($conexao, $query);