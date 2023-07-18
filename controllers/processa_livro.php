<?php

require 'db.php';

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$tipo = $_POST['tipo'];

try {

    $query = $conexao->prepare("INSERT INTO livros (titulo,categoria,autor,editora,tipo,estado) VALUES (?,?,?,?,?,default)");

    $query->execute(array($titulo, $categoria, $autor, $editora, $tipo));
    header('Location:../views/livros.php');
} catch (PDOException $e) {
    echo "Erro:" . $e->getMessage();
}
