<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP - 7</title>
    </head>
    <body>
        <?php 
            $nome = "Felipe";
            $sobreNome = "Pestana";
            $idade = 17;
            
        ?>
        <?= "Hello $nome"?>
        <br>
        <?php
            echo 'Olá ' .$nome. ' da silva ' .$sobreNome. ' você e bonito, sua idade e de '  .$idade. ' anos';
            $retorno = $idade >= 18 ? "Sim" : "Não";
            echo "Felipe você pode dirigir ?" .$retorno;
            $retorno = strtoupper($retorno);
        ?>
        <p>Você está habilitador para tirar a carta <?= $retorno ?></p>
    </body>
</html>