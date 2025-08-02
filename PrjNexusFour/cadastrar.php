<?php 
    include("./BdNexusFour/conexao.php");
    $nome = $_REQUEST['cadNome'];
    $email = $_REQUEST['cadEmail'];
    $senha = $_REQUEST['cadSenha'];
    $senhaConfir = $_REQUEST['cadConfirSenha'];

    $sql = "INSERT INTO tbusuario (nomeUsuario, emailUsuario, cpfUsuario, enderecoUsuario, sexoUsuario, dataNascUsuario, telefoneUsuario, senhaUsuario) VALUES (:nome, :email, :cpf, :endereco, :sexo, :nasc, :fone, :senha)";

    $stmt = $pdo->prepare($sql);
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':sexo', $sexo);
    $stmt->bindParam(':nasc', $nasc);
    $stmt->bindParam(':fone', $fone);
    $stmt->bindParam(':senha', $senha);

    $stmt-> execute();


?>