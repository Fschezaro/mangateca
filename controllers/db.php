<?php

$servidor = "localhost";
$usuario = "admin";
$senha = "bancofer$$";
$db = "mangateca";

$conexao = new PDO("mysql:dbname=$db;host=$servidor", $usuario, $senha);
