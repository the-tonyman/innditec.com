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
    
//////////////////////////  Agregar Proyecto///////////////////////////
    
    class Proyecto
    {
        var $nombre_proyecto,$img_proyecto,$descrip_proyecto,$descrip_proyecto_portada,$url,$proyectoID;
        
        function agregarProyecto($nombre_proyecto,$rutaDestino,$descrip_proyecto,$descrip_proyecto_portada,$url)
        {
            $this->nombre_proyecto=$nombre_proyecto;
            $this->img_proyecto=$rutaDestino;
            $this->descrip_proyecto=$descrip_proyecto;
            $this->descrip_proyecto_portada=$descrip_proyecto_portada;
            $this->url=$url;         
            
            $sql = "insert into proyectos(nombre_proyecto,img_proyecto,descrip_proyecto,descrip_proyecto_portada,url_proyecto)values('".$nombre_proyecto."','".$rutaDestino."','".$descrip_proyecto."','".$descrip_proyecto_portada."','".$url."')";
            mysql_query($sql,Conectar::Conexion());
            echo"<script type='text/javascript'>
                 alert('Su registro fue satisfactoriamente');
                 window.location='../pag/proyectos.php';
                 </script>"; 
        }
        
         function eliminarProyecto($proyectoID)
            {
                $this->proyectoID=$proyectoID;
                $sql="delete from Proyectos where proyectoID=$proyectoID";
                mysql_query($sql, Conectar::Conexion());
                echo"<script type='text/javascript'>
                        alert('Su registro fue eliminado correctamente');
                        window.location='../pag/proyectos.php';
                        </script>"; 

            }
    }
    
    
   
    
    
/////////////Agregar Conocenos//////////////////////////////////7
    
    class Conocenos
    {
        var $imagen,$nombre,$ocupacion,$red_social,$descripcion;
        
        function agregarConocenos($rutaDestino,$nombre,$ocupacion,$red_social,$descripcion)
        {
            $this->imagen=$rutaDestino;
            $this->nombre=$nombre;
            $this->ocupacion=$ocupacion;
            $this->red_social=$red_social;
            $this->descripcion=$descripcion;
            
            $sql = "insert into conocenos(imagen,nombre,ocupacion,red_social,descripcion)values('".$rutaDestino."','".$nombre."','".$ocupacion."','".$red_social."','".$descripcion."')";
            mysql_query($sql,Conectar::Conexion());  
            echo"<script type='text/javascript'>
                 alert('Su registro fue satisfactoriamente');
                 window.location='../pag/conocenos.php';
                 </script>"; 
        }
        
        function eliminarConocenos($id)
        {
            $this->id=$id;
            $sql="delete from conocenos where id=$id";
            mysql_query($sql,Conectar::Conexion());
             echo"<script type='text/javascript'>
                 alert('Su registro fue eliminado satisfactoriamente');
                 window.location='../pag/conocenos.php';
                 </script>";
        }
    }
    

?>

    
