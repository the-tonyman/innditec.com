<?php

session_start();

unset($_SESSION['usuario']);

$_SESSION = array();

session_destroy();

echo"<script type='text/javascript'>
    alert('Usted ha finalizado su sesion');
    window.location='index.php';
    </script>";  
?>
