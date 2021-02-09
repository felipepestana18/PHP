<?php
if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'SIM') {
  header('Location: index.php?login=erro1');
}

?>