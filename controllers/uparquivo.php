<?php
session_start();
require 'db.php';

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    if ($_FILES['arquivo']['error'] != 0) {
        // die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
        header("Location: ../views/ativos.php");
    }


    if ($arquivo['size'] > 5242880) {
        header("Location: ../views/ativos.php");
    }

    $pasta = "../uploads/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png") {
        header("Location: ../views/ativos.php");
    }

    $deucerto = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNomeDoArquivo . "." . $extensao);

    if ($deucerto) {
    }
}

$local = $pasta . $novoNomeDoArquivo . "." . $extensao;


header('Location: ../views/inserir_livro.php');
