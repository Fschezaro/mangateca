<?php
require 'db.php';

$id = filter_input(INPUT_GET, 'id');

if ($id){
    $query = $conexao->prepare("DELETE FROM livros WHERE id= :id");
    $query -> bindValue('id',$id);
    $query -> execute();
}else{header("location: ../views/livros.php");}
header("location: ../views/livros.php");
?>