<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="css/estilo.css">
         
         
            
   <body>        
       <center><h1>Sistema de Manejo de Contenido </h1>        
       <h1>INNDITEC</h1></center>
   </body>
    
     <?php
                if(isset($_SESSION['usuario']))
            {           
        
            ?>
                <center><img src="<?php echo $_SESSION['imagen'] ;?>" width="70" height="45" border="3"></center><br>        
     
            <?php
                    echo '<center><h2>Bienvenido Administrador(a) : '.$_SESSION['usuario'].'<h2></center><br>';
             
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
            
            
      
    
       
    
</html>