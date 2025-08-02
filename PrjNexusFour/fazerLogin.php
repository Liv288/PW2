<?php
    session_start();
    include("../BdNexusFour/conexao.php");

    $email = $_GET['logEmail'];
    $senha = $_GET['logSenha'];

    // Consulta no banco
    $sql = "SELECT nomeUsuario FROM tbusuario WHERE emailUsuario = :email AND senhaUsuario = :senha";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch();
        $_SESSION['nomeUsuario'] = $usuario['nomeUsuario']; // salvar nome na sessão
        header("Location: ../index.php");
        exit;
    } else {
        echo "E-mail ou senha inválidos!";
    }
?>