<?php

    class Usuario
    {
        var $id, $nombre,$apellido,$usuario,$encryptar,$privilegios;
        
        function registrar($nombre,$apellido,$usuario,$encryptar)
        {
            $this-> nombre = $nombre ;
            $this-> apellido = $apellido;
            $this-> usuario = $usuario;
            $this-> encryptar = $encryptar ;
            
            $sql="select * from usuarios where usuario ='".$usuario."'";
            $result = mysql_query($sql,  Conectar::Conexion());
            $contar = mysql_num_rows($result);
            
            if($contar==0)
            {
               if($_FILES['imagen']['type']=='image/jpg'||$_FILES['imagen']['type']=='image/jpeg' ||$_FILES['imagen']['type']=='image/png')
               {
                  $rutaServidor = 'imagenes';
                  $rutaTemporal = $_FILES['imagen']['tmp_name'];
                  $nombreImagen = $_FILES['imagen']['name'];
                  $rutaDestino = $rutaServidor.'/'.$nombreImagen;
                  move_uploaded_file($rutaTemporal,$rutaDestino);
                  
                  $sql="insert into usuarios(imagen,nombre,apellido,usuario,password)values('".$rutaDestino."','".$nombre."','".$apellido."','".$usuario."','".$encryptar."')";
                  $result = mysql_query($sql,  Conectar::Conexion());
                  echo "<script type='text/javascript'>
                        alert('Su registro ha sido con exito');
                        window.location='index.php';
                       </script>";
               }else
               {
                 echo "<script type='text/javascript'>
                        alert('La imagen no es compatible');
                        window.location='frm_registro.php';
                       </script>";  
               }
            }else
            {
                echo "<script type='text/javascript'>
                        alert('Su usuario ya ha sido registrado');
                        window.location='index.php';
                       </script>";
            }
            
            
            
        }
    }

?>

    
