<?php

session_start();

/*ão feita pela a URL.

    print_r($_GET);
    echo '<hr>';
    echo $_GET['email'];
    echo '<hr>';
    echo $_GET['senha'];
    */


// para recuperar a requisção emputido no forumulario
print($_POST['email']);
print($_POST['senha']);
echo '<hr>';
$existe = false;

$usuarios_app = [
    ['email' => 'felipe-pe27@hotmail.com', 'senha' => '123456'],
    ['email' => 'felipe@hotmail.com', 'senha' => '123456'],
];

foreach ($usuarios_app as $usuario) {

    if ($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) {
        $_SESSION['logado'] = 'SIM';
        header('Location: home.php');
        break;
    } else {
        $_SESSION['logado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
}


