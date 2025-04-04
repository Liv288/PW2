<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        $id = Array();
        $titulo = Array();
        $imagem = Array();
        $subtitle = Array();
        $desc = Array();

        //Notícia 1
        $id[0] = 1;
        $title[0]= 'Juiz diz que Musk provavelmente violou a Constituição dos EUA e bloqueia cortes na USAI';
        $imagem[0]= './images/elon.jpg';
        $subtitle[0] = 'Juiz entendeu que órgão chefiado por Elon Musk não tem poder para fazer cortes na USAID, determinando que o governo restaure o acesso a funcionários da agência.';
        $desc[0] = 'Um juiz federal bloqueou, nesta terça-feira (18), os cortes adicionais do governo dos Estados Unidos na Agência dos EUA para o Desenvolvimento Internacional (USAID). Na decisão, o magistrado afirmou que o desmonte da agência, determinado pelo bilionário Elon Musk, provavelmente violou a Constituição.
        Musk, atual chefe do Departamento de Eficiência Governamental (DOGE), não ocupa um cargo oficial no governo. A Casa Branca argumenta que ele não recebe salário e atua apenas como conselheiro do presidente Donald Trump. No entanto, o juiz federal Theodore Chuang, de Maryland, decidiu que o DOGE não tem autoridade para realizar tais cortes.
        Chuang ordenou que o governo Trump restaurasse o acesso a e-mails e computadores para todos os funcionários da USAID, incluindo aqueles que foram colocados em licença administrativa.
        Ele concluiu ainda que as evidências indicam que Musk tomou decisões que levaram ao fechamento da sede e do site da agência, apesar da alegação de que ele seria apenas um conselheiro do presidente.
        As declarações públicas de Musk e as postagens dele nas redes sociais demonstram que ele exerce "controle firme sobre o DOGE", segundo o juiz. Além disso, Chuang destacou que, diante das mudanças, a USAID provavelmente não será mais capaz de cumprir algumas de suas funções legais.
        ';

        //Notícia 2
        $id[1] = 2;
        $title[1]='Capital registra chuva forte com raios, rajadas de vento e alagamentos em várias regiões da cidade.';
        $imagem[1]='./images/chuva.jpg';
        $subtitle[1] = 'Segundo o CGE, houve queda de granizo em dois pontos da cidade. Seis córregos ficaram em alerta para transbordamento. Um muro caiu em Itaquera, na Zona Leste.';
        
        //Notícia 3
        $id[2] = 3;
        $title[2]='Onda de ataques a concessionárias da Tesla, de Elon Musk, cresce e preocupa autoridades nos EUA.';
        $imagem[2]='./images/tesla.jpg';
        $subtitle[2] = 'Cybertrucks incendiados, balas e coquetéis molotov disparados contra showrooms: ataques a propriedades da Tesla, de Elon Musk, aumentaram nos EUA, e autoridades falam em terrorismo.';
        
        //Notícia 4 
        $id[3] = 4;
        $title[3]='Gusttavo Lima anuncia que desistiu de se candidatar à Presidência da República e foca em novos projetos.';
        $imagem[3]='./images/gusttavoLima.jpg';
        $subtitle[3] = 'Gusttavo Lima anunciou que desistiu de disputar a presidência da República em 2026, decisão que foi divulgada pelo cantor nas redes sociais e gerou grande repercussão.';
    ?>

    <?php
        $x = $_GET['idNoticia'];
    ?>

    <section>
        <?php include('header.php');?>
        <h1> <?php echo $title[$x]; ?> </h1>
        <p class="subtitle">  <?php echo $subtitle[$x]; ?> </p>
        <div class="imagem">
            <?php echo '<img src="'.$imagem[$x].'" class="section-img" width="292" height="192">';?>
        </div>
        <div class="texto">
            <p class="desc"><?php echo $desc[0]; ?></p>
        </div>

        <?php include('footer.php');?>
    </section>
</body>
</html>
