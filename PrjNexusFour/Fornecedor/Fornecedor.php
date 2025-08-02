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
    <?php include("./BdNexusFour/conexao.php"); ?>
    <?php include("header.php"); ?>
    <br><br><br>

    <div class="containerTabela">
        <h2>Fornecedores</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Contato</th>
            </tr>
            <?php
            $stmt = $pdo->query("SELECT nomeFornecedor, contatoFornecedor FROM tbfornecedor");
            while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                echo "<tr><td>" . $row["0"] . "</td><td>" . $row["1"] . "</td></tr>";
            }
            ?>
        </table>
    </div>
    <?php include('footer.php') ?>
</body>
</html>