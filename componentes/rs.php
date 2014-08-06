<?php
mysql_select_db($database_cnxinnditec, $cnxinnditec);
$query_rsslide = "SELECT slideID, img_slide, caption FROM slideshow ORDER BY slideID ASC limit 0,3";
$rsslide = mysql_query($query_rsslide, $cnxinnditec) or die(mysql_error());
$row_rsslide = mysql_fetch_assoc($rsslide);
$totalRows_rsslide = mysql_num_rows($rsslide);

mysql_select_db($database_cnxinnditec, $cnxinnditec);
$query_rsproyecto = "SELECT proyectoID, img_proyecto, descrip_proyecto FROM proyectos ORDER BY proyectoID ASC limit 0,3";
$rsproyecto = mysql_query($query_rsproyecto, $cnxinnditec) or die(mysql_error());
$row_rsproyecto = mysql_fetch_assoc($rsproyecto);
$totalRows_rsproyecto = mysql_num_rows($rsproyecto);
?>