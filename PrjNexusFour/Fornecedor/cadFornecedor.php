<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/cadFornecedor.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <?php include('header.php'); ?>

    <section class="container">
        <div class="card">
            <h1>Cadastro de um novo Fornecedor</h1>
            <form action="inserirFornecedor.php" method="get">
                <input type="text" name="txName" id="txName" placeholder="Nome" required>
                <input type="email" name="txContato" id="txContato" placeholder="Email" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>

    <?php include('footer.php'); ?>

</body>

</html>