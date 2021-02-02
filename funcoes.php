<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP - 7</title>
    </head>
    <body>
     <?php
     
        function exibirBemVindo(){
            echo "Seja bem vindo";
        }

        function calcularArea($altura, $largura){
            $area = $altura * $largura;
            return $area;
        }
        exibirBemVindo();
        echo "<br>";
        $area = calcularArea(10,20);
        echo "<hr>";
        echo $area;
        echo "<hr>";
        $area2 = calcularArea (30,50);
        echo "<h1> $area </h1>";
     ?>
    </body>
</html>