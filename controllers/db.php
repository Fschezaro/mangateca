<?php

$servidor = "172.16.84.196";
$usuario = "teste";
$senha = "teste123";
$db = "mangateca";

$conexao = new PDO("mysql:dbname=$db;host=$servidor", $usuario, $senha);
