<?php
require 'db.php';

$id = $_GET['id'];

$query = $conexao->prepare("DELETE FROM livros WHERE id=?");
if ($query->execute(array($id))) {
    session_start();
    $_SESSION['mensagem'] = "Registro excluido com sucesso";
}

header("location: ../views/livros.php");
