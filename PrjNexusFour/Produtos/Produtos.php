<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <?php include("./BdNexusFour/conexao.php"); ?>
    <?php include("header.php"); ?>

    <div class="containerTabela">
        <h2>Produtos</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Data Fabricação</th>
                <th>Nome Fabricante</th>
                <th>Nome Fornecedor</th>
            </tr>
            <?php
            $stmt = $pdo->query(
                "SELECT nomeProduto,descProduto,precoProduto,dataFabricacaoProduto, nomeFabricante, nomeFornecedor FROM tbproduto
                    INNER JOIN tbFabricante ON tbProduto.idFabricante = tbFabricante.idFabricante
                    INNER JOIN tbFornecedor ON tbProduto.idFornecedor = tbFornecedor.idFornecedor");
            while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                echo "<tr><td>" . $row["0"] . "</td><td>" . $row["1"] . "</td><td>" . $row["2"] . "</td>" . "<td>" . $row["3"] . "</td><td>" . $row["4"] . "</td><td>" . $row["5"] . "</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>