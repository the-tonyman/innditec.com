<?php

    session_start();
    include('../lib/conexion.php');
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ocupacion = $_POST['ocupacion'];
    $red_social = $_POST['red_social'];
    $descripcion = $_POST['descripcion'];
    
    $rutaServidor = 'imagenes';
    $rutaTemporal = $_FILES['nuevaImagen']['tmp_name'];
    $nombreImagen = $_FILES['nuevaImagen']['name'];
    $rutaDestino = $rutaServidor.'/'.$nombreImagen;           
    move_uploaded_file($rutaTemporal,$rutaDestino);
    
    $aql="update conocenos set imagen='".$rutaDestino."',
        nombre='".$nombre."',ocupacion='".$ocupacion."',red_social='".$red_social."',
        descripcion='".$descripcion."' where id='".$id."'";
    
    mysql_query($aql,Conectar::Conexion());
    
    echo "<script type='text/javascript'>
           alert('Su registro fue actualizado satisfactoriamente');
           window.location='conocenos.php';
           </script>";
    
?>
