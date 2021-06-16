<?php session_start(); ?>

<?php

//No logout, limpa-se as variáveis de sessão e valta-se a pagina de login
$_SESSION['username'] = null;
$_SESSION['id'] = null;
$_SESSION['nome'] = null;
$_SESSION['apelido'] = null;
$_SESSION['level'] = null;

header("Location: index.php");

?>