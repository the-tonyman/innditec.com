<?php if (array_key_exists ('enviar', $_POST)) {
      //script para procesar mail
      $para ='anthonyramirez@innditec.com'. ', '; //utiliza tu propia dirección email
      $asunto = 'contacto';
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
     function esSospechoso($val, $patron, &$sospechoso) {
    // si la variable es un array, loop a través de cada elemento
    // y pasarlo recursivamente de vuelta a la misma función
    if (is_array($val)) {
      foreach ($val as $item) {
        esSospechoso($item, $patron, $sospechoso);
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
    esSospechoso($_POST, $patron, $sospechoso);

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
<article>	
	<h1 class="title_general">CONTÁCTANOS</h1>
    <div id="contact_2">
        <div id="contact_1">
            <p class="contact_direccion">Calle Elias Aguirre #<br>
            Belén - Iquitos</p>
            <p class="contact_phone">958661578 / 954108127</p>
            <p class="contact_preguntas"><strong>Preguntas generales:</strong> <a href="mailto:info@innditec.com">info@innditec.com</a><br>
            <strong>Soporte: </strong><a href="mailto:soporte@innditec.com">soporte@innditec.com</a></p>
        </div>
        <div id="mapa">
        </div>
    </div>
</article>
<article>
	<div id="contact_5">
        <div id="contact_3">
            <h2>QUIERES CONTRATARNOS?</h2>
            <p>Estamos disponibles</p>
        </div>
        <p id="contact_4"><a href="cotizacion">SOLICITAR COTIZACIÓN</a></p>
	</div>
</article>
<article>
	<h2 class="title_general">ENVIANOS UN EMAIL</h2>
    <?php if ($_POST && isset($perdido) && !empty($perdido)) {
        ?>
        <p><span class="advertencia2">Por favor, complete los campos que se indican.</span></p>
        <?php
        }
        elseif ($_POST && !$enviarMail) {
        ?>
         <p><span class="advertencia2">Lo sentimos, ha habido un problema enviando su mensaje.</span></p>
        <?php
          }
        elseif ($_POST && $enviarMail) {
        ?>
        <p>Su mensaje ha sido enviado. Le responderemos a la brevedad.</p>
    <?php }?> 
    <form action="" method="post">
    	<p class="contact_6">Tu nombre <?php if (isset($perdido) && in_array('nombre', $perdido)) { ?><br>
            <span class="advertencia">Escriba su nombre</span><?php } ?>
            <input type="text" name="nombre" id="nombre" <?php if (isset($perdido)) {
                echo 'value=" '.htmlentities($_POST['nombre']).' " ';
                }
                 ?> />
        </p>
        <p class="contact_6">Tu e-mail <?php if (isset($perdido) && in_array('email', $perdido)) { ?><br>
            <span class="advertencia">Escriba su email</span><?php } ?>
            <input type="text" name="email" id="email" <?php if (isset($perdido)) {
                echo 'value=" '.htmlentities($_POST['email']).' " ';
                }
                 ?> />
        </p>
        <p class="contact_7">Tu mensaje <?php if (isset($perdido) && in_array('comentario', $perdido)) { ?><br>
            <span class="advertencia">Escriba su mensaje</span><?php } ?>
            <textarea name="comentario" id="comentario">
            <?php if (isset($perdido)) {
                echo htmlentities($_POST['comentario']);
                }
            ?>
            </textarea>
        </p>
        <p class="contact_8"><input type="submit" value="ENVIAR" name="enviar" id="enviar" ></p>
    </form>
</article>                