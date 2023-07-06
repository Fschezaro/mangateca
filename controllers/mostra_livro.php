<?php
require 'db.php';

$result = [];
$id = $_GET['id'];
$query = $conexao->prepare("SELECT * FROM livros WHERE id = ?");
$query->execute(array($id));

if ($query->rowCount()) {
    $result =  $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
header("location: ../views/livros.php");
