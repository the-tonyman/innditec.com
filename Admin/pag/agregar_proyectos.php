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
       <center><h1>Proyectos Realizado </h1>        
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
        <form action="agregar_proyectos.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Nombre_Proyecto</td>
                        <td>:</td>
                        <td><input type="text" name="nombre_proyecto" required></td>
                    </tr>
                    <tr>
                        <td>Imagen</td>
                        <td>:</td>
                        <td><input type="file" name="imagen" required></td>
                    </tr> 
                    <tr>
                        <td>Descripcion</td>
                        <td>:</td>
                        <td><textarea name="descrip_proyecto" rows="10" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td>Descripcion_Portada</td>
                        <td>:</td>
                        <td><textarea name="descrip_proyecto_portada" rows="10" cols="50" ></textarea></td>
                    </tr>
                    <tr>
                        <td>Url</td>
                        <td>:</td>
                        <td><input type="text" name="url" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Agregar"></td>
                    </tr>
                </table>
        </form>  
   </center>
</body>       
    
</html>

    <?php
        if($_POST)
        {
            $rutaServidor = 'img_proyectos';
            $rutaTemporal = $_FILES['imagen']['tmp_name'];
            $nombreImagen = $_FILES['imagen']['name'];
            $rutaDestino = $rutaServidor.'/'.$nombreImagen;           
            move_uploaded_file($rutaTemporal,$rutaDestino);
            
            $nombre_proyecto = $_POST['nombre_proyecto'];
            $descrip_proyecto = $_POST['descrip_proyecto'];
            $descrip_proyecto_portada = $_POST['descrip_proyecto_portada'];
            $url = $_POST['url'];
           
            $agregar = new Proyecto();
            $agregar->agregarProyecto($nombre_proyecto, $rutaDestino, $descrip_proyecto, $descrip_proyecto_portada,$url);
        }
    ?>
