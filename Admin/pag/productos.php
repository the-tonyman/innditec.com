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
       <center><h1>Productos</h1>        
       <h1>INNDITEC</h1></center>
       <center><a href="../index_Administrador.php">Volver al CPANEL</A></center>
   
    
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
   <table border="1">
           <tr>
               <td>Id</td>
               <td>CategoriaId</td>
               <td>Producto</td>
               <td>Detalle</td>
               <td>Precio</td>
               <td>Destacado</td>
           </tr>
   
   <?php
        $sql= "select * from productos";
        $result=  mysql_query($sql,Conectar::Conexion());
        
        while($row = mysql_fetch_array($result))
        {
   ?> 
           <tr>
           <td><?php echo $row['productoID'] ?></td>
           <td><?php echo $row['categoriaID'] ?></td>
           <td><?php echo $row['producto'] ?></td>
           <td><?php echo $row['detalle_home'] ?></td>
           <td><?php echo $row['precio'] ?></td>
           <td><?php echo $row['destacado'] ?></td>
           </tr> 
           
   <?php
        }
   ?>
      </table>
</center>    
</body>       
    
</html>
