<?php

session_start();

$_SESSION['x'] = 'TESTE';
// para recuperar a requisção feita pela a URL.
/*
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
        echo 'Usuário Autenticado';
        $existe = true;
        break;
    } else {
        header('Location: index.php?login=erro');
        $existe = false;
    }
}

if ($existe == true) {
    $_SESSION['logado'] = 'SIM';
} else {
    $_SESSION['logado'] = 'NAO';
}
