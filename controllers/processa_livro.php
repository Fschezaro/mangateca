<?php

require 'db.php';

$titulo = $_POST['titulo'] == "" ? null : $_POST['titulo'];
$categoria = $_POST['categoria'] == "" ? null : $_POST['categoria'];
$autor = $_POST['autor'] == "" ? null : $_POST['autor'];
$editora = $_POST['editora'] == "" ? null : $_POST['editora'];
$tipo = $_POST['tipo'];

try {

    $query = $conexao->prepare("INSERT INTO livros (titulo,categoria,autor,editora,tipo,estado) VALUES (?,?,?,?,?,default)");

    $query->execute(array($titulo, $categoria, $autor, $editora, $tipo));
    header('Location:../views/ativos.php');
} catch (PDOException $e) {
    echo "Erro:" . $e->getMessage();
}
