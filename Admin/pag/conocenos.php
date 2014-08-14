<?php
    session_start();
    include('../lib/conexion.php');
    
    $sql="select * from conocenos";
    $result = mysql_query($sql,Conectar::Conexion());
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="resource/estilo1.css">
         
         
            
   <body>        
       <center><h1>Conocenos </h1>        
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
    <a href="agregar_conocenos.php">Agregar</a>
    <br>
        <table border="1">
            <tr>
                <td>Imagen</td>
                <td>Nombre</td>
                <td>Ocupacion</td>
                <td>Red_Social</td>
                <td>Descripcion</td>
                <td colspan="2">Mantenimiento</td> 
            </tr>
            <?php
                while($rows = mysql_fetch_array($result))
                {
                    $id = $rows['id'];
                    $imagen = $rows['imagen'];
                    $nombre = $rows['nombre'];
                    $ocupacion = $rows['ocupacion'];
                    $red_social = $rows['red_social'];
                    $descripcion = $rows['descripcion'];
            ?>  
             <tr>
                <td><img src="<?php echo $imagen ?>" width="70" height="70"></td>
                <td><?php echo $nombre ?></td>
                <td><?php echo $ocupacion ?></td>
                <td><?php echo $red_social ?></td>
                <td><?php echo $descripcion ?></td>
                <td><a href="editar_conocenos.php?id=<?php echo $id ?>&imagen=<?php echo $imagen?>&nombre=<?php echo $nombre?>&ocupacion=<?php echo $ocupacion ?>&red_social=<?php echo $red_social ?>&descripcion=<?php echo $descripcion?>"><button>Editar</button></a></td>
                <td>
                    <form action="eliminar_conocenos.php" method="post" >
                        <table>
                            <tr>
                                <td><input type="hidden" name="id" value="<?php echo $rows['id'] ?>"></td>
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
    
   </center>
</body>       
    
</html>