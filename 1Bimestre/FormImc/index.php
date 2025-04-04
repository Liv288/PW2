<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Calculo IMC</h1>
    <form action="recuperarDados.php" method="post">
        <label for="">Peso:</label>
        <input type="text" name="txPeso" >
        <br />
        <br />
        <label for="">Altura:</label>
        <input type="text" name="txAltura" >
        <br />
        <br />
        <input type="submit" value="Enviar">
    </form>
</body>
</html>