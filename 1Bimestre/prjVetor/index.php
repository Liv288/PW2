<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        echo '<div>';
            echo '<div class="titulo">';
                echo '<h1>Números de 1 a 100</h1>';
            echo '</div>';

            echo '<div class="num">';
                for($i=1; $i<=100; $i++){
                    if($i%2==0){
                        echo '<h3 class="par">'. $i .'</h3>';
                    }else{
                        echo '<h3 class="impar">'. $i .'</h3>';
                    }
                }
            echo '</div>';
        echo '</div>';
    ?>
</body>
</html>