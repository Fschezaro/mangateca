<?php
session_start();

require 'db.php';

$nickname = $_SESSION['user'];
$acao = 'Saiu';

setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data = strftime('%Y-%m-%e %T', strtotime('now'));

$query = $conexao->prepare("INSERT INTO logsdelogin (dia,usuario,acao) VALUES (?,?,?)");

$query->execute(array($data, $nickname, $acao));

unset($_SESSION['logged']);

header('Location: ../views/login.php');
