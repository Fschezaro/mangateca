<?php
require 'db.php';

$result = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $query = $conexao->prepare("SELECT * FROM livros WHERE id = :id");
    $query ->bindValue(':id', $id);
    $query->execute();

    if($query->rowCount() > 0){
        $result = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        header("location: ../views/livros.php");
    }
}else{
    header("location: ../views/livros.php");
}
?>
