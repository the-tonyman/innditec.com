<?php
    include('connections/cnxinnditec.php');
    $sql = "select * from conocenos";
    $result = mysql_query($sql,$cnxinnditec);
?>

<h1 class="title_general">CONÓCENOS</h1>
<p>Somos una empresa joven </p>
<p>Cada uno de los miembros del equipo de <strong>Innditec</strong> esta en continua capacitación, utilizamos lo último en <strong>tecnologías web</strong> para el correcto y óptimo desarrrollo de su <strong>página web</strong></p>
<figure class="conocenos">
	<img src="img/somos_mas/alme.jpg" alt="Almendra Alessandra Saavedra Freitas" />
    <div>
        <h4>Almendra Alessandra Saavedra Freitas</h4>
        <p>twitter</p>
        <p>Diseñadora web con manejo de fireworks.</p>
    </div>
</figure>
<figure class="conocenos">
    <img src="img/somos_mas/justin.jpg" alt="Albert Paul Dustin Navarro Marapara" />
    <div>
        <h4>Albert Paul Dustin Navarro Marapara</h4>
        <p>twitter</p>
        <p>Especialista en windows, desarrollo de aplicaciones empresariales con visual studio.net, c#, php y mysql python y proximamente java, gamer, dj, amante de la naturaleza.</p>
    </div>
</figure>
<figure class="conocenos">
    <img src="img/somos_mas/anthony_ramirez_frontend_innditec.jpg" alt="Lic. Anthony Ramirez Grandez" />
    <div>
        <h4>Lic. Anthony Ramirez Grandez</h4>
        <p>twitter</p>
        <p>Maquetador web con manejo de html5, css3 y demas herramientas necesarias para la correcta maquetacion de un sitio web, fallido intento de diseñador gráfico, amante de la tecnologia y gamer.</p>
    </div>
</figure>
<figure class="conocenos">
    <img src="img/somos_mas/mario.jpg" alt="Lic. Lorenzo Capuena Arirama" />
    <div>
        <h4>Lic. Lorenzo Capuena Arirama</h4>
        <p>Programador en Php, javascript, jquery y proximamente en nodejs, amante del hentai</p>
    </div>
</figure>
<figure class="conocenos">
	<img src="img/somos_mas/martha.jpg" alt="Manoel Alfredo Casanova Olortegui" />
    <div>
        <h4>Manoel Alfredo Casanova Olortegui</h4>
        <p>twitter</p>
        <p>Programador javascript y jquery</p>
    </div>
</figure>
=======

   
    <?php
    while($rows = mysql_fetch_array($result))
    {
        
    ?> 
       <figure class="conocenos">
            <img src="Admin/pag/<?php echo $rows['imagen'] ?>" width="70" height="150"> 
              <div>
                <h4><?php echo $rows['ocupacion'] ?></h4>
                <h4><?php echo $rows['nombre'] ?></h4>
                <p><?php echo $rows['red_social'] ?></p>
                <p><?php echo $rows['descripcion'] ?></p>  
              </div> 
       </figure>
       
    <?php
    }
    ?>

  <body>
        
        
    </body>
</html> 
>>>>>>> 5ff223cad7f2ef6502da1c6721a5a9db20249348
