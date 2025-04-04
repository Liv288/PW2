<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor IMC</title>
    <link rel="stylesheet" href="./css/dados.css">
</head>
<body>
    <?php 
        $peso= $_POST['txPeso'];

        echo "<h1 class='titulo'>Seu peso é: </h1>" .$peso. "kg" ;

        $altura= $_POST['txAltura'];
        echo "<br />";
      
        echo "<h1 class='titulo'>Sua altura é: </h1>" .$altura. "m";
        echo "<br />";
        $imc = $peso/($altura*$altura);

        echo "<h1 class='titulo'>Seu imc é: </h1>" .$imc;

        if ($imc <= 18.5) {
            echo"<h2>Abaixo do peso</h2>";
            echo "<img src='./images/abaixo do normal.jpg' alt=''>";
            echo "<div class='text'>";
            echo"<p class='abaixo'>Procure um médico. Algumas pessoas têm um baixo peso por características do seu organismo e tudo bem. Outras podem estar enfrentando problemas, como a desnutrição. É preciso saber qual é o caso.
</p";
            echo "</div>";
            } else if ($imc >= 18.6 && $imc <= 24.9) {
                echo"<h2>Peso normal</h2>";
                echo "<img src='./images/normal.jpg' alt=''>";
                echo "<div class='text'>";
                echo"<p class='normal'>Que bom que você está com o peso normal! É o melhor jeito de continuar assim é mantendo um estilo de vida ativo e uma alimentação equilibrada.
</p>";
                echo "</div>";
            } else if ($imc >= 25 && $imc <= 29.9) {
                echo"<h2>Sobrepeso</h2>";
                echo "<img src='./images/sobrepeso.jpg' alt=''>";
                echo "<div class='text'>";
                echo"<p class='sobre'>Ele é, na verdade, uma pré-obesidade e muitas pessoas nessa faixa já apresentam doenças associadas, como diabetes e hipertensão. Importante rever hábitos e buscar ajuda antes de, por uma série de fatores, entrar na faixa da obesidade pra valer.

</p>";
                echo "</div>"; 
            } else if ($imc >=30 && $imc<=34.9){
                echo"<h2>Obesidade grau 1</h2>";
                echo "<img src='./images/obesidade grau 1.jpg' alt=''>";
                echo "<div class='text'>";
                echo"<p class='grauI'>Sinal de alerta! Chegou na hora de se cuidar, mesmo que seus exames sejam normais. Vamos dar início a mudanças hoje! Cuide de sua alimentação. Você precisa iniciar um acompanhamento com nutricionista e/ou endocrinologista.
</p>";
                echo "</div>"; 
            } else if ($imc >=35 && $imc<=39.3){
                echo"<h2>Obesidade grau II</h2>";
                echo "<img src='./images/obesidade grau 2.jpg' alt=''>";
                echo "<div class='text'>";
                echo"<p class='grauII'>Mesmo que seus exames aparentem estar normais, é hora de se cuidar, iniciando mudanças no estilo de vida com o acompanhamento próximo de profissionais de saúde.

</p>";
                echo "</div>"; 
            }else{
                echo"<h2>Obesidade grau III</h2>";
                echo"<img src='./images/obesidade grau 3.jpg' alt=''>";
                echo "<div class='text'>";
                echo"<p class='grauIII'>Aqui o sinal é vermelho, com forte probabilidade de já existirem doenças muito graves associadas. O tratamento deve ser ainda mais urgente.
</p>";
                echo "</div>";
            }

    ?>
</body>
</html>