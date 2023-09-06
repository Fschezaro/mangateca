<?php
session_start();
require 'db.php';

$nickname = $_POST['nickname'];
$passwordi = $_POST['passwordi'];


$query = $conexao->prepare("SELECT * FROM users WHERE nickname = ?");

$query->execute(array($nickname));

$resultado =  $query->fetch(PDO::FETCH_ASSOC);

if ($resultado) {
    $_SESSION['logged'] = true;
    $_SESSION['username'] = $nickname;
    $_SESSION['iduser'] = $resultado['iduser'];
    header('Location: ../views/ativos.php');
} else {
    header('Location: ../views/login.php');
}
