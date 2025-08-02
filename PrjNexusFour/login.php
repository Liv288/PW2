<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

    <section class="containerPai">
        <div class="card loginActive">
            <div class="esquerda">
                <div class="formLogin">
                    <h2 class="pqp">Fazer Login</h2>
                    <form action="fazerLogin.php" method="get">
                        <input type="email" name="logEmail" id="logEmail" placeholder="E-mail">
                        <input type="password" name="logSenha" id="logSenha" placeholder="Senha">
                        <button type="submit" ><a href="./index.php" class="entrar">Entrar</a></button>
                    </form>
                </div>
                <div class="facaLogin">
                    <h2 >Já tenho <br /> uma conta?</h2>
                    <p>Perfeito! logue na sua conta para poder comprar vários produtos incriveis!</p>
                        <button class="loginButton">Faça Login</button>
                </div>
            </div>
            <div class="direita">
                <div class="formCadastro">
                    <h2 class="pqp">Cadastro</h2>
                    <div>
                        <form class="organizar" action="cadastrar.php" method="get">
                            <input class="inputCadastro" type="text" name="cadNome" id="cadNome" placeholder="Nome">
                            <input class="inputCadastro" type="email" name="cadEmail" id="cadEmail" placeholder="E-mail">
                            <input class="inputCadastro" type="text" name="cadCpf" id="cadCpf" placeholder="CPF">
                            <input class="inputCadastro" type="text" name="cadEndereco" id="cadEndereco" placeholder="Endereço">
                            <label for="cadSexo">Seu Sexo</label>
                            <select class="inputDiferenciado" name="cadSexo" id="cadSexo" required>
                                <option value="">Selecione o sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                            <label  for="">Data de nascimento</label>
                            <input class="inputDiferenciado" type="date" name="nasc" id="nasc">
                            <input class="inputCadastro" type="text" name="fone" id="fone" placeholder="Telefone">
                            <input class="inputCadastro" type="password" name="cadSenha" id="cadSenha" placeholder="Senha">
                            <input class="inputCadastro" type="password" name="cadConfirSenha" id="cadConfirSenha" placeholder="Confirmar Senha">
                            <button class="botãoCadastro" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
                <div class="facaCadastro">
                    <h2>Não tem <br /> uma conta?</h2>
                    <p>Que tal começar criando uma para podermos fazer ótimas compras?</p>
                        <button class="cadastroButton">Cadastrar-se</button>
                </div>
            </div>
        </div>


    </section>
    <script src="./js/login.js"></script>
</body>
</html>