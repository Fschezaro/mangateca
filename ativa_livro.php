<?php
require 'db.php';

$id = $_GET['id'];

$query = $conexao->prepare("UPDATE livros SET estado = '1' WHERE id=?");
if ($query->execute(array($id))) {
    session_start();
    $_SESSION['ativado'] = "Registro ativado com sucesso";
}

header("location: ../views/inativos.php");
