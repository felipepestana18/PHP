<?php 
// tem 2 opção para destruir a sessão com unset ou atraves session_destroy
// a diferenca que unset vai destruir o valor do array e session destroy session, 
session_start();
session_destroy();
header('Location: index.php');
?>