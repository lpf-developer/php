<?php
// $connection = mysqli_connect('db',"root","root","sys") or die(mysqli_error());
// echo "Conexão bem-sucedida!";
// $connection -> close();

require_once './config/Connection.php';
$conexao = Connection::getInstance();
$pdo = $conexao->getPdo();
