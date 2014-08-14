<?php
    session_start();
    include('../lib/conexion.php');
//    include('../lib/sesion.php');
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="resource/estilo1.css">
         
         
            
   <body>        
       <center><h1>Editar Proyectos </h1>        
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
          
     <?php
            $id = $_GET['id'];
            $nombre = $_GET['proyecto'];
            $imagen = $_GET['nombre'];
            $descripcion = $_GET['descripcion'];
            $portada = $_GET['portada'];
            $url = $_GET['url'];
            
      ?>
        <br><br>    
       <center> 
           <form action="actualizar_proyectos.php" method="post" enctype="multipart/form-data"> 
                <table>
                    <tr>
                       <td colspan="3"><center><img src="<?php echo $imagen ?>"  width="90" height="70" ></center></td>
                    </tr> 
                    <tr>
                        <td colspan="3"><input type="hidden" name="id" value="<?php echo $id ?>"></td>
                    </tr>
                    <tr>
                        <td>Cambiar Imagen</td>
                        <td>:</td>
                        <td><input type="file" name="nuevaImagen" required></td>
                    </tr>
                    <tr>
                        <td>Nombre del Proyecto</td>
                        <td>:</td>
                        <td><input type="text" name="nombre_proyecto" value="<?php echo $nombre ?>" required></td>
                    </tr>
                    <tr>
                        <td>Descripcion</td>
                        <td>:</td>
                        <td><textarea name="descripcion" rows="10" cols="50"><?php echo $descripcion ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Descripcion Portada</td>
                        <td>:</td>
                        <td><textarea name="portada" rows="10" cols="50"><?php echo $portada ?></textarea></td>
                    </tr>
                     <tr>
                        <td>Url</td>
                        <td>:</td>
                        <td><input type="text" name="url" value="<?php echo $url ?>"></td>
                    </tr>
                    <tr>
                       <td colspan="3"><input type="submit" value="Actualizar"></td>
                    </tr>
                    
                </table>
           </form>
     </center>
     </body>
   </html>
   
  
   