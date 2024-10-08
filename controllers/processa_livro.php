<?php
session_start();
require 'db.php';

$iduser = $_SESSION['iduser'];

$titulo = $_POST['titulo'] == "" ? null : $_POST['titulo'];
$categoria = $_POST['categoria'] == "" ? null : $_POST['categoria'];
$autor = $_POST['autor'] == "" ? null : $_POST['autor'];
$editora = $_POST['editora'] == "" ? null : $_POST['editora'];
$tipo = $_POST['tipo'] == "" ? null : $_POST['tipo'];
$estado = '1';
$recebido = $_POST['btnradio'];
$valor = $_POST['valor'] == "" ? null : $_POST['valor'];
// $local = $pasta . $novoNomeDoArquivo . "." . $extensao;

$query = $conexao->prepare("INSERT INTO livros (titulo,categoria,autor,editora,tipo,estado,recebido,relation,valor) VALUES (?,?,?,?,?,?,?,?,?)");

$query->execute(array($titulo, $categoria, $autor, $editora, $tipo, $estado, $recebido, $iduser, $valor));

if ($_SESSION['redirecionamento'] == 'ativos') {
    header("location: ../views/ativos.php");
} else if ($_SESSION['redirecionamento'] == 'pendentes') {
    header("location: ../views/pendentes.php");
} else {
    header("location: ../views/inativos.php");
}
