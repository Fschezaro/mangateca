<?php
session_start();

require 'db.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'] == "" ? null : $_POST['titulo'];
$categoria = $_POST['categoria'] == "" ? null : $_POST['categoria'];
$autor = $_POST['autor'] == "" ? null : $_POST['autor'];
$editora = $_POST['editora'] == "" ? null : $_POST['editora'];
$tipo = $_POST['tipo'] == "" ? null : $_POST['tipo'];

$query = $conexao->prepare("UPDATE livros SET titulo = ?, categoria = ?, autor = ?, editora = ?, tipo = ? WHERE id = ?");
$query->execute(array($titulo, $categoria, $autor, $editora, $tipo, $id));

if ($_SESSION['redirecionamento'] == 'ativos') {
    header("location: ../views/ativos.php");
} else if ($_SESSION['redirecionamento'] == 'pendentes') {
    header("location: ../views/pendentes.php");
} else {
    header("location: ../views/inativos.php");
}
