<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cnxinnditec = "localhost";
$database_cnxinnditec = "db_innditec";
$username_cnxinnditec = "tonyman";
$password_cnxinnditec = "tonyman";
$cnxinnditec = mysql_pconnect($hostname_cnxinnditec, $username_cnxinnditec, $password_cnxinnditec) or trigger_error(mysql_error(),E_USER_ERROR); 

$query_rsUTF8 = sprintf("SET NAMES '%s'", "utf8");
$rsUTF8 = mysql_query($query_rsUTF8, $cnxinnditec) or die(mysql_error().$query_rsUTF8);
?>