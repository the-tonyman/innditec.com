<?php if (array_key_exists ('enviar', $_POST)) {
      //script para procesar mail
      $para ='anthonyramirez@innditec.com'. ', '; //utiliza tu propia dirección email
      $asunto = 'enviado desde pagina de contacto';
      //Lista de archivos que se esperan
      $esperado = array('nombre', 'email', 'comentario');
      //Configurar archivos obligatorios
      $obligatorio = array('nombre', 'email', 'comentario');
      //Crear un array vacío para cualquier archivo perdido
      $perdido = array();
      
      //asume que no hay nada sospechoso
      $sospechoso = false;
      //crear un patrón para localizar frases sospechosas
      $patron = '/Content-Type:|BCC:|CC:/i';
      
      // function para comprobar frases sospechosas
     function esSospechoso2($val, $patron, &$sospechoso) {
    // si la variable es un array, loop a través de cada elemento
    // y pasarlo recursivamente de vuelta a la misma función
    if (is_array($val)) {
      foreach ($val as $item) {
        esSospechoso2($item, $patron, $sospechoso);
        }
      }
    else {
      // si es encontrada una de las frases sospechosas, configurar Boolean a true
      if (preg_match($patron, $val)) {
        $sospechoso = true;
        }
      }
    }
    
    //comprobar el array $_POST y todos los subarrays buscando contenido sospechoso
    esSospechoso2($_POST, $patron, $sospechoso);

      if ($sospechoso) {
        $enviarMail = false;
        unset($perdido);
        }
      else {    
      //Procesar las variables $_POST
      foreach ($_POST as $key => $value) {
      //asignar a variable temporalmente y vacía espacio blanco si no un array
      $temp = is_array($value) ? $value : trim($value);
      //si vacío y obligatorio, añadir a array $perdido
      if (empty($temp) && in_array($key, $obligatorio)) {
          array_push($perdido, $key);
      }
      //En otro caso, asignar a una variable del mismo nombre que $key
      elseif (in_array($key, $esperado)) {
      ${$key} = $temp;
      }
      }
      }
      
      //validar la dirección email    
      if (!empty($email)) {
     // expresión regular para identificar caracteres ilegales en dirección email 
     $checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
     //rechazar la dirección email si no cumple la expresión regular
     if (!preg_match($checkEmail, $email)) {
     $sospechoso = true;
     $enviarMail = false;
     unset($perdido);
     }
      }
      
      //Seguir sólo si todos los campos requeridos están OK
      if (!$sospechoso && empty($perdido)) {
      
      //Construir el mensaje
      $mensaje = "Nombre: $nombre\n\n";
      $mensaje .= "Email: $email\n\n";
      $mensaje .= "Comentario: $comentario\n\n";
      
      //Limitar tamaño de línea a 70 caracteres
      $mensaje = wordwrap($mensaje, 300);
      
      //crear cabeceras adicionales
      $cabeceras ='From: Contacto<info@innditec.com>';
      $cabeceras .='Cc: anthonyramirez@innditec.com';
      if (!empty($email)) {
       $cabeceras .= "\r\nReply-To: $email";
       }
      //Enviarlo
      $enviarMail =  mail ($para, $asunto, $mensaje, $cabeceras );
      if ($enviarMail) {
      //$perdido deja de ser necesario si el email es enviado, así que lo destruimos con unset
      unset($perdido);
      }
      }
      }            
?>