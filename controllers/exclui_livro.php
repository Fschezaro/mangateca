<?php
require 'db.php';

$id = $_GET['id'];

$query = $conexao->prepare("UPDATE livros SET estado = '0' WHERE id=?");
if ($query->execute(array($id))) {
    session_start();
    $_SESSION['mensagem'] = "Registro desativado com sucesso";
}

header("location: ../views/ativos.php");
