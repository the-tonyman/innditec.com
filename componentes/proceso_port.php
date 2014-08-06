<?php 
require('../connections/cnxinnditec2.php');
mysql_select_db($database_cnxinnditec, $cnxinnditec);	
									//conexion a la base de datos upi
$cantires=10;
$numero_recibido=$_GET["numero"];
									//variable recibida por url "numero" (enviado con ajax)
$limite=($numero_recibido*$cantires)-$cantires;
									//$limite= cantidad para el limite de consulta LIMIT
$consulta=mysql_query("SELECT * FROM proyectos",$cnxinnditec);
									//$consulta=consulta mysql a la tabla de nombre recibida			
$filas_resultado_total = mysql_num_rows($consulta);						
									//$filas_resultado= almacena la cantidad de filas que muestra el resultado de la consulta
$division= $filas_resultado_total/$cantires;
									//$division= cantidad de filas/3 (para saber la paginacion con 3 filas) - (el resultado sale en flotante)
$division_entera=(int)$division;
									//$division= conversion de flotante a entera de $division (paginacion)
	if($filas_resultado_total % $cantires!=0)
									//si cantidad total de la consulta su coeficiente entre 3 es diferente de 0 hacer:
		{$division_entera=$division_entera+1;}
									//$division_entera= resultado aumentado + 1	
$info=mysql_query("SELECT * FROM proyectos ORDER BY proyectoID DESC LIMIT $limite,$cantires",$cnxinnditec);
									//$info= consulta mysql seleccion de la tabla nombre recibido, ordenado por id de forma descendente con limite nºfila, con 3 resultados 
$canfilinfo = mysql_num_rows($info);
									//$canreinfo= cantidad total de filas del resultado de la consulta($info)
for($i=0;$i<$canfilinfo;$i++){
	$resultado=mysql_fetch_array($info);
	echo "<figure class='portafolio'>";	
			echo "<div>";
				echo "<h3><a href='$resultado[5]'>$resultado[1]</a></h3>";
				echo "<p> $resultado[3] <br> $resultado[4] </p>";
			echo "</div>";
		echo "<img src='img/trabajos_web/ready/$resultado[2]' alt='$resultado[2]'/>";
	echo "</figure>";
}

$sumar=$numero_recibido+1;
$restar=$numero_recibido-1;

echo "<article class='portafolio'>";
	echo "<ul>";
			
			if($numero_recibido==1 && $division_entera==1){
				echo"<li><a href='#'>1</a></li>";
			}
			
			elseif($numero_recibido==1 && $division_entera==2){
				echo"<li><a href='#' >$numero_recibido</a></li>";
				echo"<li><a href='#' onclick='cargar($sumar)'>siguiente</a></li>";
			}
			
			elseif($numero_recibido==2 && $division_entera==2){
				echo"<li><a href='#' onclick='cargar($restar)'>volver</a></li>";
				echo"<li><a href='#' >$numero_recibido</a></li>";
			}
			
			else{
				if($numero_recibido == 1 ){
					echo"<li><a href='#' >1</a></li>";
					echo"<li><a href='#' onclick='cargar($sumar)'>siguiente</a></li>";
				}
				elseif($numero_recibido > 1 && $numero_recibido < $division_entera){
					echo"<li><a href='#' onclick='cargar($restar)'>volver</a></li>";
					echo"<li><a href='#' >$numero_recibido</a></li>";
					echo"<li><a href='#' onclick='cargar($sumar)'>siguiente</a></li>";
				}
			
				else{
					echo"<li><a href='#' onclick='cargar($restar)'>volver</a></li>";
					echo"<li><a href='#' >$numero_recibido</a></li>";
				}
			}
	echo "</ul>";
echo "</article>";
	?>