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
$perfil_usuario = ['ADMIN' => 1, 'LEITOR' => 2];

$usuarios_app = [
    ['id' => 1, 'email' => 'maria@hotmail.com', 'senha' => '123456', 'perfil_usuario' => $perfil_usuario['ADMIN']],
    ['id' => 2, 'email' => 'jose@hotmail.com', 'senha' => '123456', 'perfil_usuario' =>  $perfil_usuario['ADMIN']],
    ['id' => 3, 'email' => 'felipe-pe27@hotmail.com', 'senha' => '123456', 'perfil_usuario' =>  $perfil_usuario['LEITOR']],
    ['id' => 4, 'email' => 'felipe@hotmail.com', 'senha' => '123456', 'perfil_usuario' => $perfil_usuario['LEITOR']],

];

foreach ($usuarios_app as $usuario) {

    print_r($usuario);
    if ($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) {
        $_SESSION['logado'] = 'SIM';
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['perfil_usuario'] = $usuario['perfil_usuario'];
        header('Location: home.php');
        break;
    } else {
        $_SESSION['logado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
}
