<?php

    session_start();

    include('lib/conexion.php');
    include('lib/sesion.php');
    
    if($_POST)
    {
        $usuario = $_POST['usuario'];
        $password = $_POST['password1'];
        
        $encryptado = md5($password);
        
        Sesion::ingresarUsurio($usuario,$encryptado);
    }else
    {
        echo "<script type='text/javascript'>
               window.location='index.php';
               </script>"; 
    }
?>
