<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include('./BdNexusFour/conexao.php'); ?>
    <?php include("header.php"); ?>
    
    <br><br><br><br><br>

    <h2>Nossas Tabelas</h2>

    <div class="flexTabela">
        <a class="linkTabela" href="produtos.php">Produtos</a>
        <a class="linkTabela" href="usuario.php">Usuarios</a>
        <a class="linkTabela" href="fabricante.php">Fabricantes</a>
        <a class="linkTabela" href="fornecedor.php">Fornecedores</a>
        <a class="linkTabela" href="requisitos.php">requisitos</a>
    </div>

    <div class="linha"></div>
</body>
</html>