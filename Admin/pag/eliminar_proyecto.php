<?php

    session_start();
    include('../lib/conexion.php');
    include('../lib/functions.php');
    
    
    
    if($_POST)
    {
        $id= $_POST['id'];
        $eliminar = new Proyecto();
        $eliminar->eliminarProyecto($id);
    }
    
    

?>
