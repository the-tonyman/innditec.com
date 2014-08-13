<?php
    include('connections/cnxinnditec.php');
    $sql = "select * from conocenos";
    $result = mysql_query($sql,$cnxinnditec);
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
    </head>

<h1 class="title_general">CONÓCENOS</h1>
<p>Somos una empresa joven </p>
<p>Cada uno de los miembros del equipo de <strong>Innditec</strong> esta en continua capacitación, utilizamos lo último en <strong>tecnologías web</strong> para el correcto y óptimo desarrrollo de su <strong>página web</strong></p>

   
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
