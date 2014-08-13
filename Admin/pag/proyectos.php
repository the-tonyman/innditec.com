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
       <center><h1>Proyectos Realizado </h1>        
       <h1>INNDITEC</h1></center>
       <center><a href="../index_Administrador.php">Volver al CPANEL</a></center>
   
    
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
       <a href="agregar_proyectos.php">Agregar</a>
   <table border="1" width="40">
           <tr>
               
               <td>Nombre_Proyecto</td>
               <td>Imagen_proyecto</td>
               <td>Descripcion_Proyecto</td>
               <td>Descripcion_Portada</td>
               <td>Url</td>
               <td colspan="2">Mantenimiento</td>
           </tr>
   
   <?php
        $sql= "select * from proyectos";
        $result=  mysql_query($sql,Conectar::Conexion());
        $filas = mysql_num_rows($result);
        echo "<font color='red'>Cantidad de registro es : $filas </font>";
       
   
        while($row = mysql_fetch_array($result))
        {
            $id = $row['proyectoID'];
            $nombre = $row['nombre_proyecto'];
            $imagen = $row['img_proyecto'];
            $descripcion = $row['descrip_proyecto'];
            $portada = $row['descrip_proyecto_portada'];
            $url = $row['url_proyecto'];
            
   ?> 
          
           <tr>
                 
                <td><?php echo $nombre ?></td>
                <td><img src="<?php echo $imagen ?>" width="90" height="70" ></td>           
                <td><?php echo $descripcion ?></td>
                <td><?php echo $portada ?></td>
                <td><?php echo $url ?></td>
                <td><a href="editar_proyectos.php?id=<?php echo $id?>&proyecto=<?php echo $nombre?>&nombre=<?php echo $imagen?>&descripcion=<?php echo $descripcion?>&portada=<?php echo $portada?>&url=<?php echo $url?>"><button>Editar</button></a></td>
                <td>
                    <form action="eliminar_proyecto.php" method="post" >
                        <table>
                            <tr>
                                <td><input type="hidden" name="id" value="<?php echo $row['proyectoID'] ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Eliminar"></td>
                            </tr>
                        </table>
                    </form>
                    
                </td>
           </tr> 
           
   <?php
        }
   ?>
      </table>
  </center> 
</body>       
    
</html>