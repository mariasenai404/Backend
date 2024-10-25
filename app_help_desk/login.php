<?php
session_start();

// echo $_SESSION['autenticado'];
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
  header ('Location: entrar.php?login=erro2');
}

?>