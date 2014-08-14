<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="resource/estilo1.css">
         
         
            
   <body>        
       <center><h1>Sistema de Manejo de Contenido </h1>        
       <h1>INNDITEC</h1></center>
   
    
     <?php
                if(isset($_SESSION['usuario']))
            {           
                echo '<center><h2>Bienvenido Administrador(a) : '.$_SESSION['usuario'].'<h2></center>';
            ?>
                <center><img src="<?php echo $_SESSION['imagen'] ;?>" width="70" height="45" border="3"></center>      
     
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
            <center><a href="logout.php">Cerrar Sesion</a></center> 
        <?php    
            }
        ?>
   <br>
   
   <div id="items">
        Items
        <ul>
            <li><a href="pag/novedades.php">Novedades</li>
            <li><a href="pag/productos.php">Productos</li>
            <li><a href="pag/proyectos.php">Proyectos</li>
            <li><a href="#">Testimonios</a></li>
            <li><a href="pag/conocenos.php">Conocenos</a></li>
        </ul>
   </div>
   
   <center><img src="imagenes/logo.png"></center>
   
   
      
    
</body>       
    
</html>