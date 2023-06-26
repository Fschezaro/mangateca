<?php

include 'db.php';

$codigo = $_POST['codigo'];
$nome_livro = $_POST['titulo'];
$categoria = $_POST['categoria'];
$autor= $_POST['autor'];
$editora= $_POST['editora'];
$tipo= $_POST['tipo'];

$query = "INSERT INTO livros (cod,titulo,categoria,autor,editora,tipo) VALUES ($codigo,'$nome_livro','$categoria','$autor','$editora','$tipo')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=livros');