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
    <br><br><br>

    <div class="containerTabela">
        <h2>Usuários</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
                <th>Telefone</th>
            </tr>
            <?php
            $stmt = $pdo->query("SELECT nomeUsuario, emailUsuario, cpfUsuario, enderecoUsuario, sexoUsuario, dataNascUsuario, telefoneUsuario FROM tbusuario");
            while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                echo "<tr><td>" . $row["0"] . "</td><td>" . $row["1"] . "</td><td>" . $row["2"] . "</td>" . "<td>" . $row["3"] . "</td><td>" . $row["4"] . "</td><td>" . $row["5"] . "</td><td>" . $row["6"] . "</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>