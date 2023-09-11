<?php
session_start();

require 'db.php';

// if (isset($_FILES['arquivo'])) {
//     $arquivo = $_FILES['arquivo'];

//     if ($arquivo['error']) {
//         $_SESSION['error'] = true;
//         die();
//     }
//     if ($arquivo['size'] > 5242880) {
//         $_SESSION['tamanho'] = true;
//         die();
//     }
//     $pasta = "../uploads/";
//     $nomeDoArquivo = $arquivo['name'];
//     $novoNomeDoArquivo = uniqid();
//     $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

//     if ($extensao != "jpg" && $extensao != "png") {
//         $_SESSION['extensao'] = true;
//         die();
//     }

//     $deucerto = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNomeDoArquivo . "." . $extensao);

//     if ($deucerto) {
//         $_SESSION['arqsuccess'] = true;
//     }
// }
// $local = $pasta . $novoNomeDoArquivo . "." . $extensao;

$id = $_POST['id'];
$titulo = $_POST['titulo'] == "" ? null : $_POST['titulo'];
$categoria = $_POST['categoria'] == "" ? null : $_POST['categoria'];
$autor = $_POST['autor'] == "" ? null : $_POST['autor'];
$editora = $_POST['editora'] == "" ? null : $_POST['editora'];
$tipo = $_POST['tipo'] == "" ? null : $_POST['tipo'];
$recebido = $_POST['btnradio'];

$query = $conexao->prepare("UPDATE livros SET titulo = ?, categoria = ?, autor = ?, editora = ?, tipo = ?, recebido = ? WHERE id = ?");
$query->execute(array($titulo, $categoria, $autor, $editora, $tipo, $recebido, $id));

if ($_SESSION['redirecionamento'] == 'ativos') {
    header("location: ../views/ativos.php");
} else if ($_SESSION['redirecionamento'] == 'pendentes') {
    header("location: ../views/pendentes.php");
} else {
    header("location: ../views/inativos.php");
}
