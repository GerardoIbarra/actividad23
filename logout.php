<?php
$_SESSION['nombre'] = $_GET['nombre'];
unset($_SESSION['nombre']);//libera la variable de la sesion    

session_unset();
session_destroy();
header('location:index.html');
?>