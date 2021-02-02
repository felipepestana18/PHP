<html>

<head>
    <meta charset="utf-8">
    <title>Curso de PHP - 7</title>
</head>

<body>

    <?php
    $nome = 'Felipe';

    $items = ['Mesa', 'Cadeira', 'Sofá'];

    echo '<pre>';
    print_r($items);

    foreach ($items as  $item) {
        echo $item . '<br>';
        if ($item == 'Mesa') {
            echo 'Existe mesa' . '<br>';
        }
    }
    ?>
    <h3><?= $nome ?></h3>
</body>

</html>