<?php

    class Sesion
    {
        function ingresarUsurio($usuario,$encryptar)
        {
            $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' and password='$encryptar'";
            $result = mysql_query($sql,Conectar::Conexion());
            
             if($row=mysql_fetch_array($result))
             {
                $imagen = $row[1];
                $nombre = $row[2];
                $apellido = $row[3];
                $usuario = $row[4];
                $privilegios = $row[6];
                
                $_SESSION['imagen']=$imagen;
                $_SESSION['nombre']=$nombre;
                $_SESSION['apellido']=$apellido;
                $_SESSION['usuario']=$usuario;
                $_SESSION['privilegios']=$privilegios;
                
                if($_SESSION['privilegios']=='Administrador')
                {
                  echo "<script type='text/javascript'>
                         window.location='index_Administrador.php';
                        </script>";  
                }else
                {
                    echo "<script type='text/javascript'>
                         window.location='index.php';
                      </script>";  
                }
             }else
             {
                 echo "<script type='text/javascript'>
                   alert('Usuario o Password incorrectos');
                         window.location='frm_login.php';
                        </script>";  
             }
             
        }
    }


?>
