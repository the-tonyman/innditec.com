<?php ob_start("ob_gzhandler"); 
require('connections/cnxinnditec2.php');
mysql_select_db($database_cnxinnditec, $cnxinnditec);
$query_rsslide = "SELECT slideID, img_slide, caption FROM slideshow ORDER BY slideID DESC limit 0,3";
$rsslide = mysql_query($query_rsslide, $cnxinnditec) or die(mysql_error());
$row_rsslide = mysql_fetch_assoc($rsslide);
$totalRows_rsslide = mysql_num_rows($rsslide);

mysql_select_db($database_cnxinnditec, $cnxinnditec);
$query_rsproyecto = "SELECT proyectoID, img_proyecto, descrip_proyecto, descrip_proyecto_portada, url_proyecto FROM proyectos ORDER BY proyectoID ASC limit 0,3";
$rsproyecto = mysql_query($query_rsproyecto, $cnxinnditec) or die(mysql_error());
$row_rsproyecto = mysql_fetch_assoc($rsproyecto);
$totalRows_rsproyecto = mysql_num_rows($rsproyecto);
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<? include ('componentes/metas.php'); ?>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/responsiveslides.css" />
<link rel="stylesheet" href="css/base.css" />
<link href="css/movil.css" rel="stylesheet" media="only screen and (max-width:480px)" />
<link href="css/tablet.css" rel="stylesheet" media="only screen and (min-width:481px) and (max-width:849px)" />
<link href="css/desktop.css" rel="stylesheet" media="only screen and (min-width:850px)" />
</head>
<body>
    <?php include ('componentes/header.php'); ?>            
    <section id="content">
      <?php include ('pag/content.php'); ?> 
      <?php include ('componentes/footer.php'); ?>          
    </section>
    <script src="js/prefixfree.min.js"></script>
    <script src="js/jquery.min.js"></script>    
    <script src="js/modernizr2.js"></script>
    <script src="js/flaco.js"></script> 
    <script src="js/jquery.validate.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>  
    <script src="js/maps.js"></script>  
          
</body>

</html>
<?php
mysql_free_result($rsslide);
mysql_free_result($rsproyecto);
ob_end_flush(); ?>