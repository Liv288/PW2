<?php 
    $servidor = "localhost";
    $banco = "bdnexusFour";
    $usuario = "root";
    $senha = "";
    $dbname = $banco;
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>