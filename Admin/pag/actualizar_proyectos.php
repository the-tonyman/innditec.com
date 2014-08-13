<?php
    
    session_start();
    include('../lib/conexion.php');
    
    $id = $_POST['id'];
    $nombreProyecto = $_POST['nombre_proyecto'];
    $descripcion = $_POST['descripcion'];
    $portada = $_POST['portada'];
    $url = $_POST['url'];
    
    $rutaServidor = 'img_proyectos';
    $rutaTemporal = $_FILES['nuevaImagen']['tmp_name'];
    $nombreImagen = $_FILES['nuevaImagen']['name'];
    $rutaDestino = $rutaServidor.'/'.$nombreImagen;           
    move_uploaded_file($rutaTemporal,$rutaDestino);
    
    $sql = "update proyectos set img_proyecto='".$rutaDestino."',
         nombre_proyecto='".$nombreProyecto."',descrip_proyecto='".$descripcion."',descrip_proyecto_portada='".$portada."',
         url_proyecto='".$url."' where proyectoID='".$id."'";
    
     mysql_query($sql,Conectar::Conexion());
     echo "<script type='text/javascript'>
           alert('Su registro fue actualizado satisfactoriamente');
           window.location='proyectos.php';
           </script>";

?>
