<?php

require 'db.php';

$codigo = $_POST['codigo'];
$nome_livro = $_POST['titulo'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$tipo = $_POST['tipo'];

try {

    $query = $conexao->prepare("INSERT INTO livros (cod,titulo,categoria,autor,editora,tipo) VALUES (?,?,?,?,?,?)");

    $query->execute(array($codigo, $nome_livro, $categoria, $autor, $editora, $tipo));
    header('Location:../views/livros.php');
} catch (PDOException $e) {
    echo "Erro:" . $e->getMessage();
}
