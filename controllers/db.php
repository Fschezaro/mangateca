<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "mangateca";

$conexao = new PDO("mysql:dbname=$db;host=$servidor", $usuario, $senha);
