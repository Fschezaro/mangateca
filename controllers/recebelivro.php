<?php
require 'db.php';

$id = $_GET['id'];

$query = $conexao->prepare("UPDATE livros SET recebido = 1 WHERE id=?");
if ($query->execute(array($id))) {
    session_start();
    $_SESSION['recebido'] = "Recebimento confirmado com sucesso";
}

header("location: ../views/pendentes.php");
