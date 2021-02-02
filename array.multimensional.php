<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP - 7</title>
    </head>
    <body>
        <?php 
            $array_coisas = [];
            $kiwi = "kiwi";
            $array_coisas['frutas'] = ['Maça', 'Uva', 'Morango','Laranja'];
            $array_coisas['pessoas'] = ['Felipe', 'Rafael', 'Lika', 'Carla'];
            $pessoa = ['Nome' => "Felipe", 'SobreNome' => "Pestana"];
            $pessoa['Nome'] = ['arroz', 'feijao'];
            $pessoa['bonitas']['nome'] = ['Felipe'];
            echo '<pre>';
            array_push($pessoa['bonitas']['nome'], ['Lipao']);
            array_push($pessoa['bonitas']['nome'], ['Lika']);
            array_push($pessoa['bonitas']['nome'], ['Rafael']);
            var_dump($pessoa['bonitas']['nome'][1]);
            echo "<pre>";
            print_r($pessoa['Nome']);
            echo "<hr>";
            print($pessoa['SobreNome']);
            
            echo '<pre>';
            print_r($array_coisas);
            echo '<hr>';
            print($array_coisas['frutas'][3]);
            echo '<hr>';
            print($array_coisas['pessoas'][1]);
            echo '</pre>';
        ?>
    </body>
</html>