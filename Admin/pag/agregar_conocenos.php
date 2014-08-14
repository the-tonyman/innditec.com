<?php
    session_start();
    include('../lib/conexion.php');
//    include('../lib/sesion.php');
    include('../lib/functions.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="resource/estilo1.css">
         
         
            
   <body>        
       <center><h1>Agregar Conocenos</h1>        
       <h1>INNDITEC</h1></center>
       <center><a href="../index_Administrador.php">Volver al CPANEL</a></center>
       <center><a href="proyectos.php">Volver atras</a></center>
   
    
     <?php
                if(isset($_SESSION['usuario']))
            {           
                    echo '<center><h2>Bienvenido Administrador(a) : '.$_SESSION['usuario'].'<h2></center>';
            ?>
                <center><img src="../<?php echo $_SESSION['imagen'] ;?>" width="70" height="45" border="3"></center>      
     
            <?php
                    
             
                }else
            
                    {
                    echo" <center> tu estas en el sitio de Adminitracion de contenido </center>  "; 
                    }
            ?>
      
      <?php
                if(!isset($_SESSION['usuario']))
            {
                    echo"<script type='text/javascript'>
                    alert('Acceso Denegado...!!! Tienes que loguearte');
                    window.location='index.php';
                    </script>";  
         ?>
            
        }     
<!--        <br> <center><a href="frm_login.php">Iniciar Sesion </center></a>  -->
        <?php    
            }else
            {
        ?>
            <center><a href="../logout.php">Cerrar Sesion</a></center> 
        <?php    
            }
        ?>
   <br>
   
   <center>
            <form action="agregar_conocenos.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Imagen</td>
                        <td>:</td>
                        <td><input type="file" name="imagen" required></td>
                    </tr> 
                    <tr>
                        <td>Nombre</td>
                        <td>:</td>
                        <td><input type="text" name="nombre" required></td>
                    </tr> 
                    <tr>
                        <td>Ocupacion</td>
                        <td>:</td>
                        <td><input type="text" name="ocupacion" required></td>
                    </tr> 
                    <tr>
                        <td>Red Social</td>
                        <td>:</td>
                        <td><input type="text" name="red_social" required></td>
                    </tr> 
                    <tr>
                        <td>Descripcion</td>
                        <td>:</td>
                        <td><textarea name="descripcion" rows="10" cols="50" required></textarea></td>
                    </tr>
                    <tr>

                        <td><input type="submit" value="Agregar"></td>
                    </tr>
            </form> 
   </center>
 </body>
 </html>
 
    <?php
        if($_POST)
        {
            $rutaServidor = 'imagenes';
            $rutaTemporal = $_FILES['imagen']['tmp_name'];
            $nombreImagen = $_FILES['imagen']['name'];
            $rutaDestino = $rutaServidor.'/'.$nombreImagen;           
            move_uploaded_file($rutaTemporal,$rutaDestino); 
            
            $nombre = $_POST['nombre'];
            $ocupacion = $_POST['ocupacion'];
            $red_social = $_POST['red_social'];
            $descripcion = $_POST['descripcion'];
            
            $agregar = new Conocenos();
            $agregar->agregarConocenos($rutaDestino, $nombre, $ocupacion, $red_social, $descripcion);
        }
    ?> 
   
   