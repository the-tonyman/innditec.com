<?php
switch($_GET['pag'])
{	
	case "servicios": include ('pag/servicios.php'); break;	
	case "que-dicen-nuestros-clientes": include ('pag/testimonios.php'); break;
	case "contactanos": include ('pag/contacto.php'); break;
	case "conocenos": include ('pag/conocenos.php'); break;
	case "portafolio": include ('pag/portafolio.php'); break;
	case "capacitaciones": include ('pag/capacitacion.php'); break;	
	case "soporte-tecnico": include ('pag/soporte.php'); break;	
	case "desarrollo-web": include ('pag/desarrollo.php'); break;
	default : include ('pag/portada.php');
}
?>