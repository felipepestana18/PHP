<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP - 7</title>
    </head>
    <body>
        <?php
            $texto = "Curso de PHP Completo";

            echo strtoupper($texto) . ' Upper Case <br>';
            echo "<hr>";

            echo strtolower($texto) . ' Lower  Case <br>';
            echo "<hr>";

            echo "Quantidade de caracter ". strlen($texto);
            echo "<hr>";

            echo ucfirst($texto) .  '  Primeiro caracter maicuslo ucfirst';
            echo "<hr>";

            echo str_ireplace("PHP", "JavaScript", $texto);        
        ?>
    </body>
</html>