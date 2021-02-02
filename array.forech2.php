<html>

<head>
    <meta charset="utf-8">
    <title>Curso de PHP - 7</title>
</head>

<body>

    <?php
    $funcionarios = ['Felipe', 'Rafael', 'Rodolfo'];
    $funcionarios2 = [
        ['nome' => 'Felipe', 'salario' => 1000],
        ['nome' => 'Rafael', 'salario' => 2000],
        ['nome' => 'Rodolfo', 'salario' => 4000]
    ];

    foreach ($funcionarios as $index => $funcionario) {
        echo 'ID ' . $index . ' ' . $funcionario . '<br>';
    }
    echo '<br>';
    echo '<hr';
    echo '<br>';

    echo '<pre>';
    print_r($funcionarios2);
    echo '</pre>';

    foreach ($funcionarios2 as  $fun) {
        foreach ($fun as  $valor) {
            echo $valor . '<br>';
        }
    }



    ?>
</body>

</html>