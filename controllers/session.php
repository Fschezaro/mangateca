<?php
session_start();
require 'db.php';

$nickname = $_POST['nickname'];
$_SESSION['user'] = $_POST['nickname'];
$passwordi = $_POST['passwordi'];

$query = $conexao->prepare("SELECT * FROM users WHERE nickname = ?");

$query->execute(array($nickname));

$resultado =  $query->fetch(PDO::FETCH_ASSOC);

if ($resultado['passwordi'] == $passwordi && $resultado['nickname'] == $nickname) {
    $_SESSION['logged'] = true;
    $_SESSION['iduser'] = $resultado['iduser'];

    setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    $data = strftime('%Y-%m-%e %T', strtotime('now'));
    $acao = 'Entrou';

    $query = $conexao->prepare("INSERT INTO logsdelogin (dia,usuario,acao) VALUES (?,?,?)");

    $query->execute(array($data, $nickname, $acao));

    header('Location: ../views/ativos.php');
} else {
    $_SESSION['try'] = true;
    header('Location: ../views/login.php');
}
