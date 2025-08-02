<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Fornecedor</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/inserirFornecedor.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <?php
    include('./BdNexusFour/conexao.php');

    $nome = $_REQUEST['txName'];
    $contato = $_REQUEST['txContato'];

    $sql = "INSERT INTO tbFornecedor (nomeFornecedor, contatoFornecedor)
        VALUES (:nome, :contato)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':contato', $contato);
    $stmt->execute();
    ?>

    <?php include('header.php'); ?>

    <div class="containerPai">
        <h1 class="title">Um novo Fornecedor foi Cadastrado com sucesso!</h1>
        <p class="atributo">Nome: <?php echo $nome; ?></p>
        <p class="atributo">Email: <?php echo $contato; ?></p>
    </div>

    <?php include('footer.php'); ?>


</body>

</html>