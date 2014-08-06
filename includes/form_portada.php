<article>
    <?php include ('componentes/proceso-portada.php'); ?> 
	<h2>Contáctanos</h2>
    <?php
        if ($_POST && $enviarMail) {
        ?>
        <p>Su mensaje ha sido enviado. Le responderemos a la brevedad.</p>
    <?php }?>
    <form action="" method="post" id="contactoportada">
    	<p class="contact_9">Tu nombre<br>
            <input type="text" name="nombre" id="nombreportada" class="required" />
        </p>
        <p class="contact_9">Tu e-mail<br>
            <input type="text" name="email" id="emailportada" class="required email" />
        </p>
        <p class="contact_9">Tu mensaje<br>
            <textarea name="comentario" id="comentarioportada" class="required">
            </textarea>
        </p>
        <p class="contact_9"><input type="submit" value="ENVIAR" name="enviar" id="enviarportada" ></p>
    </form>
</article>