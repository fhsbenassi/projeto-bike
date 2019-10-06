<?php

session_start();

if(isset($_SESSION['id_usuario'])){
unset($_SESSION['id_usuario']);
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['tipouser']);
}

header("Location:index.php?pagina=login&erro=2");

?>