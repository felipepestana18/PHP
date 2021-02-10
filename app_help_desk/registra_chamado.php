<?php 

    print_r($_POST);


    $titulo = str_replace('#', '-', $_POST['titulo']);
    $tipo = str_replace('#', '-', $_POST['tipo']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto =  $titulo . '#' . $tipo . '#' .  $descricao . PHP_EOL;

     $arquivo = fopen('arquivo.hd', 'a');

     fwrite($arquivo, $texto);

     fclose($arquivo);

     header('Location: abrir_chamado.php');

?>
