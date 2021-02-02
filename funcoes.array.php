<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP - 7</title>
    </head>
    <body>
        <?php 

            $array = ['Array'];
            // verifica se é array
            $retorno = is_array($array);
            if($retorno == true) {
                echo 'Sim, é um array';
            } else {
                echo 'Não, é um array';
            }

            echo '<br>';
            echo '<br>';
            echo '<br>';
            // pega as chaves do array.
            $array1 = ['Nome' => 'Felipe', 'SobreNome' => 'Pestana', 'Doce' => 'Arroz'];
  
            echo '<br>';
            echo '<pre>';
            print_r(array_keys($array1));
            echo '</pre>';
            // retorna true ou falso quando o array for ordernado retorna true.
        
            echo '<pre>';
            print_r($array1);
            echo '</pre>';

            print_r(count($array1));
            echo '<br>';


            $array2 = ['Windows', 'MacTosh'];
            $array3 = ['Linux', 'iPera'];
            // faz a conjução de todos array em um só
            $novo_arrray = array_merge($array2, $array3);

            echo '<pre>';
            print_r($novo_arrray);
            echo '</pre>';

            $dataHoje = '27/01/2021';
            $arrayExplode = explode('/', $dataHoje);

            echo '<pre>';
                print_r($arrayExplode);
            echo '</pre>';

        ?>
    </body>
</html>