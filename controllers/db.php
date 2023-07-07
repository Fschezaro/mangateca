<?php

$servidor = "localhost";
$usuario = "teste";
$senha = "teste123";
$db = "mangateca";

$conexao = new PDO("mysql:dbname=$db;host=$servidor", $usuario, $senha);
