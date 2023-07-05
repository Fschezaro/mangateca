<?php

require 'db.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];

try {

    $query = $conexao->prepare("UPDATE livros SET (titulo=?,categoria=?,autor=?,editora=?) WHERE id (?)");

    $query->execute(array($titulo, $categoria, $autor, $editora, $id));
    header('Location:../views/livros.php');
} catch (PDOException $e) {
    echo "Erro:" . $e->getMessage();
}
