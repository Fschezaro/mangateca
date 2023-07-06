<?php
require 'db.php';

$id = filter_input(INPUT_POST, 'id');
$titulo = filter_input(INPUT_POST, 'titulo');
$categoria = filter_input(INPUT_POST, 'categoria');
$autor = filter_input(INPUT_POST, 'autor');
$editora = filter_input(INPUT_POST, 'editora');

if($id && $titulo && $categoria && $autor && $editora){
    $query = $conexao->prepare("UPDATE livros SET titulo = :titulo, categoria = :categoria, autor = :autor, editora = :editora WHERE id = :id");
    $query ->bindValue(':id', $id);
    $query ->bindValue(':titulo', $titulo);
    $query ->bindValue(':categoria', $categoria);
    $query ->bindValue(':autor', $autor);
    $query ->bindValue(':editora', $editora);
    $query->execute();

}else{ header("location:livros.php");}

echo "inserido com sucesso";