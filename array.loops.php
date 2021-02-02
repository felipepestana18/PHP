<html>

<head>
    <meta charset="utf-8">
    <title>Curso de PHP - 7</title>
</head>

<body>
    <?php
    $noticias = ['Você está na cidade', 'Você está fora da cidade', 'Você está em casa'];
    $noticiasConteudo = [
        ['titulo' => 'Página 1',  'conteudo' => 'Você está na cidade'],
        ['titulo' => 'Página 2',  'conteudo' => 'Você está fora da cidade'],
        ['titulo' => 'Página 3',  'conteudo' => 'Você está em casa']

    ];
    $index = 0;
    echo '<pre>';
    print_r($noticias);
    print_r($noticiasConteudo);

    while ($index < 3) {
        echo '<pre>';
        echo $noticias[$index];
        echo '</pre>';
        $index++;
    }
    for ($i = 0; $i < count($noticiasConteudo); $i++) {

        echo $noticiasConteudo[$i]['titulo'];
        echo '<br>';
        echo $noticiasConteudo[$i]['conteudo'];
        echo '<hr>';
    }
    ?>
</body>

</html>