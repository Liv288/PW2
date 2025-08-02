<?php 
    include("./BdNexusFour/conexao.php");

    $nome = $_REQUEST['cadNome'];
    $email = $_REQUEST['cadEmail'];
    $cpf = $_REQUEST['cadCpf'];
    $endereco = $_REQUEST['cadEndereco'];
    $sexo = $_REQUEST['cadSexo'];
    $nasc = $_REQUEST['cadNasc'];
    $fone = $_REQUEST['cadFone'];
    $senha = $_REQUEST['cadSenha'];
    $senhaConfir = $_REQUEST['cadConfirSenha'];

    $stmt = $pdo->prepare("INSERT INTO tbusuario (nomeUsuario, emailUsuario, cpfUsuario, enderecoUsuario, sexoUsuario, dataNascUsuario, telefoneUsuario, senhaUsuario) VALUES ('$nome', '$email', '$cpf', '$endereco', '$sexo', '$nasc', '$fone', '$senha')");

    $stmt-> execute();


?>