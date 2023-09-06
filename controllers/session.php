<?php
session_start();
require 'db.php';

$nickname = $_POST['nickname'];
$passwordi = $_POST['passwordi'];

$query = $conexao->prepare("SELECT * FROM users WHERE nickname = LIKE ?");

$query->execute(array($nickname));

if ($query->rowCount()) {
    $result =  $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

print_r($result['nickname']);
print_r($result['passwordi']);


// if ($nickname == $result['niuc']) {
//     $_SESSION['logged'] = true;
//     $_SESSION['username'] = $nickname;
//     $_SESSION['iduser'] = $result['iduser'];
// } else {
//     header('Location: ../views/login.php');
// }
