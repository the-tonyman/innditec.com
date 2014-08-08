<?php
    session_start();
    include('lib/conexion.php');
    include('lib/functions.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
         <?php
        if(!isset($_SESSION['usuario']))
        { 
        ?>    
        <form action="" method="post" onsubmit="return validarForm($this);" enctype="multipart/form-data">         
            Imagen
            <br>
            <input type="file" value="" name="imagen" required>
            <br>
            
        <table>
            <tr>
                <td>Nombre</td>
                <td>:</td>
                <td><input type="text" value="" name="nombre" required></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td>:</td>
                <td><input type="text" value="" name="apellido" required></td>
            </tr>
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
            <tr>
                <td>Confirmar Password</td>
                <td>:</td>
                <td><input type="password" value="" name="password2" required></td>
            </tr>
            <tr>
                
                <td colspan="3"><input type="submit" value="Registrarte"></td>
            </tr>
        </table>
        </form>
        
        <?php   
        }else
        {
             echo"<script type='text/javascript'>
                alert('Necesitas cerrar sesion para poder registrar otro usuario');
                window.location='index_Administrador.php';
                </script>";  
        }
        
       
     ?> 
        
  
    
    <?php
         if($_POST)
         {
            $nombre = $_POST['nombre'];
            $apellido  = $_POST['apellido'];
            $usuario  = $_POST['usuario'];


            $password1 = $_POST['password1'];
            $encryptado = md5($password1);

            $password2 = $_POST['password2'];
            $encryptado2 = md5($password2);
       
            if($encryptado==$encryptado2)
            {
                $user = new Usuario();
                $user->registrar($nombre, $apellido, $usuario, $encryptado);
                }else
                {
                    echo "<script type='text/javascript'>
                        alert('Los Passwords no coinciden');
                        window.location='frm_registro.php';
                        </script>";
                }
                
           }
    ?>
        <br><br>
        <a href="frm_login.php">Iniciar Sesion</a>
    </body>  
</html>
