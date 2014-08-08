<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>INTRODUCE TU USUARIO Y PASSWORD</div>
        
        <?php
        if(!isset($_SESSION['usuario']))
        {
        ?>  
        
        <form action="login.php" method="post" onsubmit="return validarForm($this);" enctype="multipart/form-data">         
           
        <table>
           
            <tr>
                <td>Usuario</td>
                <td>:</td>
                <td><input type="text" value="" name="usuario" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" value="" name="password1" required></td>
            </tr>
          
                
                <td colspan="3"><input type="submit" value="Ingresar"></td>
            </tr>
        </table>
        </form>
         <?php
                        
        }else
        {
          echo"<script type='text/javascript'>
                alert('Finaliza tu sesion para que puedas registrar otro usuario');
                window.location='index_Administrador.php';
                </script>";  
        }
        
        
     ?>       
        <br>
     <a href="frm_registro.php">Registrate</a>  
    </body>
</html>