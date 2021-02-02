<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP - 7</title>
    </head>
    <body>
        <?php
        
            // array númerico
            $frutas = ['Banana', 'Limão', 'Uva'];
            echo "<pre>";
            var_dump($frutas);
            echo "</pre>";

            $frutas[] = 'Maça';

            echo "<pre>";
            var_dump($frutas);
            echo "</pre>";

            // array associado
            $frutasNome = ['fruta1' => 'Banana', 'fruta2' => 'Maça', 'fruta3' => 'Uva'];
            echo "<pre>";
            var_dump($frutasNome);
            echo "</pre>";
            
            echo "<pre>";
            print_r($frutas[1]);
            echo "<br>";
            print_r($frutasNome['fruta1']);
            echo "</pre>";

        ?>
    </body>
</html>