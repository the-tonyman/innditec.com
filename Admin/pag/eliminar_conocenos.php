<?php

    session_start();
    include('../lib/conexion.php');
    include('../lib/functions.php');
    
    if($_POST)
    {
        $id=$_POST['id'];
        $eliminar = new Conocenos();
        $eliminar->eliminarConocenos($id);
    }

?>
