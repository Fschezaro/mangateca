<?php

require 'db.php';

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];

try {

    $query = $conexao->prepare("INSERT INTO livros (titulo,categoria,autor,editora) VALUES (?,?,?,?)");

    $query->execute(array($titulo, $categoria, $autor, $editora));
    header('Location:../views/livros.php');
} catch (PDOException $e) {
    echo "Erro:" . $e->getMessage();
}
