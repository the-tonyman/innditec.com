<?php include ('componentes/proceso-contacto.php'); ?> 
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
  <p>Páginas web, tiendas online, apps, juegos, soporte técnico, redes sociales, diseño gráfico y más a tu disposición</p>
  <?php
        if ($_POST && $enviarMail) {
        ?>
        <p>Su mensaje ha sido enviado. Le responderemos a la brevedad.</p>
    <?php }?>
    <form action="" method="post" id="contactoinnditec">
    	<p class="contact_6">Tu nombre<br>
            <input type="text" name="nombre" id="nombre" class="required" />
        </p>
        <p class="contact_6">Tu e-mail<br>
            <input type="text" name="email" id="email" class="required email" />
        </p>
        <p class="contact_7">Tu mensaje<br>
            <textarea name="comentario" id="comentario" class="required">
            </textarea>
        </p>
        <p class="contact_8"><input type="submit" value="ENVIAR" name="enviar" id="enviar" ></p>
    </form>
</article>                